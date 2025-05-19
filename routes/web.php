<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('group');
})->name('group');

Route::get('/edit', function () {
    return view('edit');
})->name('editp');

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');
