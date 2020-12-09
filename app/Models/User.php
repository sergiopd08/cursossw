<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ //Atributos de la base de datos
        'name',
        'email',
        'password',
        'edad',
        'ocupacion',
        'institucion_id'
    ];

    public function setOcupacionAttribute($value) // Mutator
    {
        return $this->attributes['ocupacion'] =  mb_strtoupper($value, 'UTF-8');
    }

    public function getNameAttribute($value) // Accessor
    {
        return strtoupper($value);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function institucion () { // Relación 1 a 1 con Instituciones
        return $this->hasOne(Institucion::class);
    }

    public function pagos () { // Relación 1 a N con Pagos
        return $this->hasMany(Pago::class);
    }

    public function cursos () { // Relacion n:m con Users para cursos en carrito
        return $this->belongsToMany(Curso::class);
    }
}
