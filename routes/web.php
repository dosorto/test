<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Persona\Personas;
use App\Livewire\Estudiantes\Estudiante;
use Livewire\Livewire;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/persona', Personas::class)->name('persona');
    Route::get('/estudiante', Estudiante::class)->name('estudiante');
});


