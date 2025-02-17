<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesControllers;
use App\Http\Controllers\CompanyUserController;
use App\Http\Controllers\NormalUserController;

// Routes path
Route::get('/', [NormalUserController::class, 'home']);
Route::get('/contact', [NormalUserController::class, 'contact']);
Route::get('/registerUser', [CompanyUserController::class, 'registerUser']);
Route::get('/registerCompany', [CompanyUserController::class, 'registerCompany']);
Route::get('/approval', [CompanyUserController::class, 'approval']);
Route::get('/login', [CompanyUserController::class, 'login']);
Route::get('/service', [CompanyUserController::class, 'service']);