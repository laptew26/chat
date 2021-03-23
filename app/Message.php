<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
      'sender_id', 'recipient_id', 'text',
    ];

    public function sender(){
        return $this->hasOne(User::class, 'id', 'sender_id');
    }

    public function recipient(){
        return $this->hasOne(User::class, 'id', 'recipient_id');
    }
}
