<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'estudiantes';


    protected $fillable = [
        'cuenta',
        'nombre',
        'apellido',
        'sexo',
        'carrera',
        'created_by',
        'deleted_by',
        'updated_by',
    ];


}
