<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('auth.login'));
Route::get('/login', fn () => view('auth.login'));
Route::get('/register', fn () => view('auth.register'));

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', fn () => view('dashboard.index'));
Route::get('/lapangan', fn () => view('lapangan.index'));
Route::get('/booking', fn () => view('booking.index'));
Route::get('/payment', fn () => view('payment.index'));
Route::get('/payment-success', fn () => view('payment.success'));
Route::get('/profile', fn () => view('profile.index'));

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin/users', fn () => view('admin.users'));

