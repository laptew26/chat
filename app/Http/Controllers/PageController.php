<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'users' => User::all(),
        ]);
    }
}
