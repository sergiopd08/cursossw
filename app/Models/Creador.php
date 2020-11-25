<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creador extends Model
{
    use HasFactory;

    protected $table = "creadores";
    public $timestamps = false;

    public function cursos() {
        return $this->belongsToMany(Cursos::class);
    }

    public function institucion() {
        return $this->hasOne(Institucion::class);
    }

    public function users() {
        return $this->hasOne(User::class);
    }
}
