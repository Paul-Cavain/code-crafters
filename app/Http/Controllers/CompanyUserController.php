<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
    // registerUser route function
    public function registerUser() {
        return view('registerUser');
    }

    // registerCompany route function
    public function registerCompany() {
        return view('registerCompany');
    }

    // login route function
    public function login() {
        return view('login');
    }

    // approval route function
    public function approval() {
        return view('approval');
    }

    // service route function
    public function service() {
        return view('service');
    }
}
