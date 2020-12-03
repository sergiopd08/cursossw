<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = "instituciones";
    protected $fillable = [
        'nombre',
        'direccion'
    ];

    public $timestamps = false;

    public function creador() {
        return $this->belongsTo(Creador::class);
    }

    public function setNombreAttribute($value) { // Mutator
        return $this->attributes['nombre'] =  mb_strtoupper($value, 'UTF-8');
    }

    public function getDireccionAttribute($value) { // Accessor
        return strtoupper($value);
    }
}
