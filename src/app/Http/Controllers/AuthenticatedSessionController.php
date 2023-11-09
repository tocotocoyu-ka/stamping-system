<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Create;
use App\Http\Request\CreateRequest;

class AuthenticatedSessionController extends Controller
{
    public function access()
    {
        return view('login');
    }
    
    public function login(ContactRequest $request)
    {
        $login = $request->only(['email', 'password']);
        return $login;
    }

}
