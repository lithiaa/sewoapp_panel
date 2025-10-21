<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // add fillable
    protected $fillable = [
        'username',
        'fullname',
        'email',
        'phone_number',
        'address',
        'password',
    ];
    // add guaded
    protected $guarded = ['id_customer'];
    // add hidden
    protected $hidden = ['password', 'created_at', 'updated_at'];

    protected $casts = [
        'password' => 'hashed',
    ];

    protected $primaryKey = 'id_customer';
}
