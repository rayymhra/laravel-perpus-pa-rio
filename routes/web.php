<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/admin', function () {
    return view('dashboard.index');
});
Route::get('/buku', function () {
    return view('buku.index');
});
Route::get('/buku/create', function () {
    return view('buku.create');
});
