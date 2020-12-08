<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    public function creadores () { // Relacion n:m con Creadores para cursos creados
        return $this->belongsToMany(Creador::class);
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
