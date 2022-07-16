<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    //Add the below functions
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $user = auth()->user()->userable;
        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);
        return ['status' => 'Message Sent!'];
    }
}
