@extends('layouts.app')

@section('content')

    <div class="card h-100 border-0 shadow-sm" style="min-height: 80vh;">
        <!-- Chat Header -->
        <div class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="avatar-sm bg-primary-subtle text-primary rounded-circle me-3 d-flex align-items-center justify-content-center">
                    <span class="fw-bold">{{ substr($chatPartner->name, 0, 1) }}</span>
                </div>
                <div>
                    <h6 class="mb-0 fw-bold">{{ $chatPartner->name }}</h6>
                    {{-- Status Indicator --}}
                    <small class="text-success" id="connection-status">
                        <i class="ri-checkbox-blank-circle-fill fs-10 align-middle me-1"></i>
                        Online ({{ ucwords(str_replace('_', ' ', $chatPartner->user_type)) }})
                    </small>
                </div>
            </div>
        </div>

        <!-- Chat Body -->
        <div class="card-body bg-light overflow-auto" id="chat-box" style="max-height: 600px;">
            <div class="d-flex flex-column gap-3" id="messages-container">

                <div class="text-center my-3">
                    <span class="badge bg-white text-muted border fw-normal shadow-sm">Today</span>
                </div>

                {{-- Load History (PHP Loop) --}}
                @forelse($messages as $msg)
                    @if($msg->sender_id === Auth::id())
                        <div class="d-flex justify-content-end">
                            <div class="text-end" style="max-width: 75%;">
                                <div class="bg-primary text-white p-3 rounded-3 rounded-top-end-0 shadow-sm text-start">
                                    {{ $msg->message }}
                                </div>
                                <small class="text-muted fs-11 mt-1 d-block">{{ $msg->created_at->format('h:i A') }}</small>
                            </div>
                        </div>
                    @else
                        <div class="d-flex justify-content-start">
                            <div class="avatar-xs me-2 mt-auto">
                                <span class="avatar-title rounded-circle bg-primary-subtle text-primary fw-bold">
                                    {{ substr($chatPartner->name, 0, 1) }}
                                </span>
                            </div>
                            <div style="max-width: 75%;">
                                <div class="bg-white text-dark p-3 rounded-3 rounded-top-start-0 shadow-sm border">
                                    {{ $msg->message }}
                                </div>
                                <small class="text-muted fs-11 mt-1 d-block">{{ $msg->created_at->format('h:i A') }}</small>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="text-center py-5" id="empty-state">
                        <div class="avatar-lg bg-white rounded-circle mx-auto mb-3 shadow-sm d-flex align-items-center justify-content-center">
                            <i class="ri-chat-smile-2-line fs-1 text-primary"></i>
                        </div>
                        <h5 class="text-muted">No messages yet.</h5>
                        <p class="text-muted small">Start the conversation with {{ $chatPartner->name }}!</p>
                    </div>
                @endforelse

            </div>
        </div>

        <!-- Footer -->
        <div class="card-footer bg-white border-top p-3">
            <form id="chat-form" class="d-flex gap-2">
                @csrf
                <input type="hidden" name="receiver_id" id="receiver_id" value="{{ $chatPartner->id }}">
                <input type="text" id="message-input" name="message" class="form-control bg-light border-0" placeholder="Type a message..." required autocomplete="off">
                <button type="submit" class="btn btn-primary rounded-circle btn-icon shadow-sm">
                    <i class="ri-send-plane-fill"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- ✅ WEBSOCKETS ENGINE -->
    @vite(['resources/js/app.js'])

    <script type="module">
        const currentUserId = {{ Auth::id() }};
        const receiverId = document.getElementById('receiver_id').value;
        const partnerInitial = "{{ substr($chatPartner->name, 0, 1) }}";
        const container = document.getElementById('messages-container');
        const chatBox = document.getElementById('chat-box');

        // 1. Auto-scroll on load
        function scrollToBottom() {
            chatBox.scrollTop = chatBox.scrollHeight;
        }
        scrollToBottom();

        // 2. Helper: Add Message to HTML
        function appendMessage(message, isMe) {
            const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            let html = '';

            if (isMe) {
                html = `
                <div class="d-flex justify-content-end slide-in">
                    <div class="text-end" style="max-width: 75%;">
                        <div class="bg-primary text-white p-3 rounded-3 rounded-top-end-0 shadow-sm text-start">${message}</div>
                        <small class="text-muted fs-11 mt-1 d-block">${time}</small>
                    </div>
                </div>`;
            } else {
                html = `
                <div class="d-flex justify-content-start slide-in">
                    <div class="avatar-xs me-2 mt-auto">
                        <span class="avatar-title rounded-circle bg-primary-subtle text-primary fw-bold">${partnerInitial}</span>
                    </div>
                    <div style="max-width: 75%;">
                        <div class="bg-white text-dark p-3 rounded-3 rounded-top-start-0 shadow-sm border">${message}</div>
                        <small class="text-muted fs-11 mt-1 d-block">${time}</small>
                    </div>
                </div>`;
            }

            const emptyState = document.getElementById('empty-state');
            if (emptyState) emptyState.remove();

            container.insertAdjacentHTML('beforeend', html);
            scrollToBottom();
        }

        // 3. 📡 LISTENER: This waits for incoming messages
        // We listen to 'chat.{my_id}' because the Event sends to receiver's ID
        setTimeout(() => {
            console.log("Subscribing to channel: chat." + currentUserId);

            window.Echo.private(`chat.${currentUserId}`)
                .listen('MessageSent', (e) => {
                    console.log('WebSocket Event Received:', e);

                    // Only show if it is from the person I am currently looking at
                    // (Prevents mixed conversations if you have multiple tabs open)
                    if (e.sender_id == receiverId) {
                        appendMessage(e.message, false); // false = incoming message
                    } else {
                        console.log('Ignored message from diff user:', e.sender_id);
                    }
                });
        }, 500);

        // 4. SENDER: Standard AJAX Post
        const form = document.getElementById('chat-form');
        const input = document.getElementById('message-input');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const message = input.value.trim();
            if(!message) return;

            // Optimistic UI: Show it immediately
            appendMessage(message, true);
            input.value = '';

            fetch("{{ route('chat.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    message: message,
                    receiver_id: receiverId
                })
            });
        });
    </script>

    <style>
        .slide-in { animation: slideUp 0.3s ease-out; }
        @keyframes slideUp { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>

@endsection
