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

Route::get('/postklik', function () {
    return view('postklik');
})->name('postk');

Route::get('/publish', function () {
    return view('publish');
})->name('postpublish');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/upgrade', function () {
    return view('upgradepremium');
})->name('pro');

