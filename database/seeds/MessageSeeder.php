<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->insert([
            'sender_id' => 1,
            'recipient_id' => 2,
            'text' => 'Hello World',
            'created_at' => '2020-11-03 16:05:13',
        ]);

        DB::table('messages')->insert([
            'sender_id' => 2,
            'recipient_id' => 1,
            'text' => 'Hello World',
            'created_at' => '2020-12-03 16:05:13',
        ]);
    }
}
