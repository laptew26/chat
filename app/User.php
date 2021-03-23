<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'login', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function sendMessages(){
        return $this->HasMany(Message::class, 'sender_id', 'user_id');
    }

    public function recipientMessages(){
        return $this->HasMany(Message::class, 'recipient_id', 'user_id');
    }
}
