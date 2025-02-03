<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
    // register route function
    public function register() {
        return view('register');
    }

    // login route function
    public function login() {
        return view('login');
    }

    // approval route function
    public function approval() {
        return view('approval');
    }
}
