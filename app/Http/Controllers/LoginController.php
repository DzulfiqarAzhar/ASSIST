<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ShowLogin() {
        return view('login');
    }

    public function ProcessLogin() {
        return view('dashboard');
    }
}
