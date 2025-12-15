<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;     

class User extends Authenticatable implements JWTSubject{


    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

   protected $table = 'users';

    protected $primaryKey = 'idUsuario';

    protected $fillable = [
        'idRol',
        'email',
        'password'
    ];
    protected $hidden = [
        'password', // Oculta la contraseña en respuestas JSON
        'created_at', 'updated_at'
    ];

    // 🔹 Métodos para JWT
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'idRol');
    }
    public function admin()
    {
        return $this->hasOne(Admin::class, 'idUsuario');
    }
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'idUsuario');
    }
    public function esSuperAdmin()
    {
        return $this->rol && $this->rol->nombreRol === 'SuperAdmin';
    }
}
