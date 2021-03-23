<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'Schulz',
            'password' => Hash::make('qwe'),
            'created_at' => '2020-11-03 16:05:13',
        ]);
        DB::table('users')->insert([
            'login' => 'Laptew',
            'password' => Hash::make('qwe'),
            'created_at' => '2020-11-03 16:05:13',
        ]);
    }
}
