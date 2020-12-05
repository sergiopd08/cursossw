<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fechaPublicacion',
        'costo',
        'n_estudiantes',
        'descripcion',
        'idioma',
        'aprendizajes',
        'requisitos',
        'categoria'
    ];

    // protected $table = "cursos";
    public function setNombreAttribute($value) // Mutator
    {
        return $this->attributes['nombre'] =  mb_strtoupper($value, 'UTF-8');
    }

    public function getIdiomaAttribute($value) // Accessor
    {
        return ucfirst($value);
    }

    public function creaciones () { // Relacion n:m con Cursos para cursos creados
        return $this->belongsToMany(User::class);
    }

    public function users () { // Relacion n:m con Cursos para cursos en carrito
        return $this->belongsToMany(User::class);
    }

    /*
    public function pagos() {
        return $this->hasMany(Pago::class);
    }
    */
}
