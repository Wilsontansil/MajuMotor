<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'password_confirmation'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
