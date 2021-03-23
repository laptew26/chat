<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Database\Eloquent\Builder;
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

    public function show($id)
    {
        return view('chat', [
            'user' => User::find($id),
        ]);
    }

    public function get($id)
    {
        return view('message', [
            'messages' => Message::query()->where(function (Builder $builder) use ($id) {
                return $builder->where('sender_id', Auth::id())->where('recipient_id', $id);
            })->orWhere(function (Builder $builder) use($id) {
                return $builder->where('sender_id', $id)->where('recipient_id', Auth::id());
            })->latest()->get(),
        ]);
    }
}
