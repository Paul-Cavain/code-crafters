<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
  
    public function register() {
        return view('register');
    }

  
    public function login() {
        return view('login');
    }

   
    public function approval() {
        return view('approval');
    }
}
