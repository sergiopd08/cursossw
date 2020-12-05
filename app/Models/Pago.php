<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
        'fecha',
        'user_id'
    ];

    public function user() { // Relación 1 a N con Users
        return $this->belongsTo(User::class);
    }

    /*
    public function curso() {
        return $this->belongsTo(Curso::class);
    }
    */
}
