<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'cuenta',
        'nombre',
        'apellido',
        'sexo',
        'carrera'
    ];


    protected $table = 'estudiantes';
}
