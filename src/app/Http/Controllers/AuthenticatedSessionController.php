<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function stamp(Request $request)
    {
        $login = $request->only(['email', 'password']);
        return view('stamp', ['login' => $login]);
    }

    public function store()
    {
        $login = $request->only(['email', 'password']);
    }
}
