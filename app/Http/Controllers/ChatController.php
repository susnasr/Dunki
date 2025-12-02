<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $chatPartner = null;

        // =================================================================
        // 🛡️ STRICT DEV MODE: FORCE CONNECT SPECIFIC USERS
        // =================================================================

        if ($user->user_type == 'student') {
            // 1. Try finding John Advisor explicitly
            $chatPartner = User::where('email', 'advisor@dunki.com')->first();

            if (!$chatPartner) {
                // 2. Fallback: Find the LATEST created Advisor (Likely John)
                // 'first()' gives the oldest (Muhammad), 'latest()->first()' gives the newest.
                $chatPartner = User::where('user_type', 'academic_advisor')->latest()->first();
            }

            if (!$chatPartner) {
                // 3. Last Resort: Find the Admin
                $chatPartner = User::where('user_type', 'admin')->first();
            }
        }
        elseif ($user->user_type == 'academic_advisor') {
            // Advisor ALWAYS talks to King Student (unless a specific student is clicked)
            if ($request->has('student_id')) {
                $chatPartner = User::find($request->student_id);
            } else {
                // 1. Try finding King explicitly
                $chatPartner = User::where('email', 'king11@gmail.com')->first();

                if (!$chatPartner) {
                    // 2. Fallback: Find the LATEST created Student
                    $chatPartner = User::where('user_type', 'student')->latest()->first();
                }
            }
        }

        // 4. Safety Check: If the system is empty or users don't exist
        if (!$chatPartner) {
            return back()->with('error', 'Chat partner not found. Please check database emails.');
        }

        // 5. Fetch Messages (History)
        $messages = Message::where(function($q) use ($user, $chatPartner) {
            $q->where('sender_id', $user->id)->where('receiver_id', $chatPartner->id);
        })
            ->orWhere(function($q) use ($user, $chatPartner) {
                $q->where('sender_id', $chatPartner->id)->where('receiver_id', $user->id);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return view('students.chat.index', [
            'messages' => $messages,
            'chatPartner' => $chatPartner
        ]);
    }

    // ✅ REAL-TIME: Fetch new messages via AJAX (JS calls this every 3s)
    public function fetch(Request $request)
    {
        $user = Auth::user();
        $receiverId = $request->receiver_id;

        $messages = Message::where(function($q) use ($user, $receiverId) {
            $q->where('sender_id', $user->id)->where('receiver_id', $receiverId);
        })
            ->orWhere(function($q) use ($user, $receiverId) {
                $q->where('sender_id', $receiverId)->where('receiver_id', $user->id);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json([
            'messages' => $messages,
            'current_user_id' => $user->id
        ]);
    }

    // ✅ REAL-TIME: Send message via AJAX
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'receiver_id' => 'required|exists:users,id'
        ]);

        $msg = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        // ✅ FIRE THE EVENT: This sends the message to the WebSocket server
        MessageSent::dispatch($msg);

        if ($request->wantsJson()) {
            return response()->json($msg);
        }

        return back();
    }
}
