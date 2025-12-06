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

        // 1. MARK MESSAGES AS READ (The Fix)
        // This ensures that when you load this page, the badge in the DB clears.
        Message::where('receiver_id', $user->id)
            ->where('is_read', false)
            ->update(['is_read' => true]);

        // ==========================================
        // 2. FORCE CONNECT TEST USERS (Priority)
        // ==========================================
        if ($user->user_type == 'student') {
            $chatPartner = User::where('email', 'advisor@dunki.com')->first();
        } elseif ($user->user_type == 'academic_advisor') {
            if ($request->has('student_id')) {
                $chatPartner = User::find($request->student_id);
            } else {
                $chatPartner = User::where('email', 'king11@gmail.com')->first();
            }
        }

        // ==========================================
        // 3. FALLBACK
        // ==========================================
        if (!$chatPartner) {
            $lastMessage = Message::where(function($q) use ($user) {
                $q->where('sender_id', $user->id)
                    ->orWhere('receiver_id', $user->id);
            })->latest()->first();

            if ($lastMessage) {
                $chatPartner = $lastMessage->sender_id == $user->id
                    ? $lastMessage->receiver
                    : $lastMessage->sender;
            } else {
                if ($user->user_type == 'student') {
                    $chatPartner = User::where('user_type', 'academic_advisor')->first()
                        ?? User::where('user_type', 'admin')->first();
                } elseif ($user->user_type == 'academic_advisor') {
                    $chatPartner = User::where('user_type', 'student')->first();
                }
            }
        }

        if (!$chatPartner) {
            return back()->with('error', 'No users found to chat with.');
        }

        // 4. Fetch Messages
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

        // Fire Event for Real-time
        MessageSent::dispatch($msg);

        if ($request->wantsJson()) {
            return response()->json($msg);
        }

        return back();
    }
}
