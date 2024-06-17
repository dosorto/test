<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});
Route::get('/edit', function () {
    return view('dorian');
});
Route::get('/show', function () {
    return view('dorian');
});
Route::get('/delete', function () {
    return view('dorian');
});
