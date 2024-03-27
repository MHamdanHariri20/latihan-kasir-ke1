<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function landing(){
        return view('landing');
    }

    public function login(){
        return view('login');
    }
}
