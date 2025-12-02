<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// ✅ ADD THIS: Chat Channel Authorization
Broadcast::channel('chat.{id}', function ($user, $id) {
    // A user can only listen to the channel named after their OWN ID.
    return (int) $user->id === (int) $id;
});
