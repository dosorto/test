<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

#este funciona
Route::get('/jose', function () {
    return view('jose');
})->name('jose');


// routes/web.php
Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/delete', function () {
    return view('delete');
})->name('delete');

Route::get('/insert', function () {
    return view('insert');
})->name('insert');

Route::get('/home', function () {
    return view('home');
})->name('home');

/*
Route::get('/create', function () {
    return view('create');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/insert', function () {
    return view('insert');
});

Route::get('/home', function () {
    return view('home');
});
*/
