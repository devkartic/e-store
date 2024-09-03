<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticationController extends Controller
{
    public function signIn()
    {
        return Inertia::render('Authentication/SignIn');
    }// end -:- signIn()

    public function signUp()
    {
        return Inertia::render('Authentication/SignUp');
    }// end -:- signUp()
}
