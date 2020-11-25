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
        'requisitos'
    ];

    // protected $table = "cursos";
    public $timestamps = false;


    public function creadores() {
        return $this->belongsToMany(Creador::class);
    }

    public function visitantes() {
        return $this->belongsToMany(Visitante::class);
    }

    public function pagos() {
        return $this->hasMany(Pago::class);
    }
}
