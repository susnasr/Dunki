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

                    {{-- ✅ DYNAMIC ROLE LABEL --}}
                    <small class="text-success">
                        <i class="ri-checkbox-blank-circle-fill fs-10 align-middle me-1"></i>
                        Online ({{ ucwords(str_replace('_', ' ', $chatPartner->user_type)) }})
                    </small>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-sm btn-light btn-icon"><i class="ri-more-2-fill"></i></button>
            </div>
        </div>

        <!-- Chat Body (Messages) -->
        <div class="card-body bg-light overflow-auto" id="chat-box" style="max-height: 600px;">
            <div class="d-flex flex-column gap-3">

                <div class="text-center my-3">
                    <span class="badge bg-white text-muted border fw-normal shadow-sm">Today</span>
                </div>

                @forelse($messages as $msg)
                    @if($msg->sender_id === Auth::id())
                        <!-- My Message (Right) -->
                        <div class="d-flex justify-content-end">
                            <div class="text-end" style="max-width: 75%;">
                                <div class="bg-primary text-white p-3 rounded-3 rounded-top-end-0 shadow-sm text-start">
                                    {{ $msg->message }}
                                </div>
                                <small class="text-muted fs-11 mt-1 d-block">{{ $msg->created_at->format('h:i A') }}</small>
                            </div>
                        </div>
                    @else
                        <!-- Partner Message (Left) -->
                        <div class="d-flex justify-content-start">
                            <div class="avatar-xs me-2 mt-auto">
                            <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                {{ substr($chatPartner->name, 0, 1) }}
                            </span>
                            </div>
                            <div class="" style="max-width: 75%;">
                                <div class="bg-white text-dark p-3 rounded-3 rounded-top-start-0 shadow-sm border">
                                    {{ $msg->message }}
                                </div>
                                <small class="text-muted fs-11 mt-1 d-block">{{ $msg->created_at->format('h:i A') }}</small>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="text-center py-5">
                        <div class="avatar-lg bg-white rounded-circle mx-auto mb-3 shadow-sm d-flex align-items-center justify-content-center">
                            <i class="ri-chat-smile-2-line fs-1 text-primary"></i>
                        </div>
                        <h5 class="text-muted">No messages yet.</h5>
                        <p class="text-muted small">Start the conversation with {{ $chatPartner->name }}!</p>
                    </div>
                @endforelse

            </div>
        </div>

        <!-- Chat Footer (Input) -->
        <div class="card-footer bg-white border-top p-3">
            <form action="{{ route('chat.store') }}" method="POST" class="d-flex gap-2">
                @csrf
                {{-- ✅ IMPORTANT: Send to the specific partner ID --}}
                <input type="hidden" name="receiver_id" value="{{ $chatPartner->id }}">

                <button type="button" class="btn btn-light btn-icon rounded-circle"><i class="ri-attachment-line"></i></button>
                <input type="text" name="message" class="form-control bg-light border-0" placeholder="Type your message..." required autocomplete="off">
                <button type="submit" class="btn btn-primary rounded-circle btn-icon shadow-sm"><i class="ri-send-plane-fill"></i></button>
            </form>
        </div>
    </div>

    <script>
        window.onload = function() {
            var chatBox = document.getElementById('chat-box');
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>

@endsection
