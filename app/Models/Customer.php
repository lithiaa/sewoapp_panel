<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

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
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
