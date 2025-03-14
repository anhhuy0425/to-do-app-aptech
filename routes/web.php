<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return ('Hello World');
})->name('greeting');

Route::get('/greeting/{name}', function ($name) {
    return 'Hello ' . $name;
});

Route::get('/hiU', function () {
    return redirect('/greeting');
});

Route::get('/hi2', function () {
    return redirect()->route('greeting');
});

Route::get('/Home', function () {
    return redirect('/');
});