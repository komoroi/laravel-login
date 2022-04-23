<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @return View
     */ 
    public function showLogin()
    {
        return view('Login.Login_form');

    }

    public function Login(LoginFormRequest $request)
    {
        

    }
}
