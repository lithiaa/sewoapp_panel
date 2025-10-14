<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    // add fillable
    protected $fillable = [
        'name',
        'desc',
    ];
    // add guaded
    protected $guarded = ['id_category'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id_category';
}
