<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $cuenta
 * @property $nombre
 * @property $apellido
 * @property $sexo
 * @property $carrera
 * @property $created_by
 * @property $deleted_by
 * @property $updated_by
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends BaseModel
{
    use SoftDeletes;
    use HasFactory;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = ['cuenta', 'nombre', 'apellido', 'sexo', 'carrera'];


}
