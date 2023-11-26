<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 5da8fa2397de87c20c885d3416336c2a2b24d41d
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

<<<<<<< HEAD
class User extends Authenticatable
=======
class User extends Authenticatable implements MustVerifyEmail
>>>>>>> 5da8fa2397de87c20c885d3416336c2a2b24d41d
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
=======
    protected $guarded = [];

>>>>>>> 5da8fa2397de87c20c885d3416336c2a2b24d41d

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
<<<<<<< HEAD
=======
        'password' => 'hashed',
>>>>>>> 5da8fa2397de87c20c885d3416336c2a2b24d41d
    ];
}
