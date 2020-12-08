<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creador extends Model
{
    use HasFactory;

    protected $table = "creadores";
    protected $fillable = [
        'user_id'
    ];

    public function cursos() // Relacion n:m con Curso para cursos creados
    {
        return $this->belongsToMany(Curso::class);
    }
}
