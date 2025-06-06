<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat.{conversationId}', function ($user, $conversationId) {
    $conversation = \App\Models\Conversation::find($conversationId);

    return $conversation &&
        ($user->id === $conversation->user_one_id || $user->id === $conversation->user_two_id);
});
