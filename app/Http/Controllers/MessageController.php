<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{



    public function send(Request $request)
    {
        Message::create([
            'text' => $request->text,
            'sender_id' => Auth::user()->id,
            'recipient_id' => $request->recipient_id,
        ]);
    }

    public function index($id)
    {
        return view('chat', [
            'user' => User::find($id),
        ]);
    }

    public function get($id)
    {
        return view('message', [
            'messages' => Message::whereIn('recipient_id', [$id, Auth::user()->id])->whereIn('sender_id', [$id, Auth::user()->id])->latest()->get(),
            'user' => User::find($id),
        ]);
    }
}
