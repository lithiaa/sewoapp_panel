<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //

    // add fillable
    protected $fillable = [
        'vehicle_name',
        'id_partner',
        'id_category',
        'price',
        'vehicle_year',
        'license_plate',
        'desc',
        'status',
        'image_url',
    ];
    // add guaded
    protected $guarded = ['id_vehicle'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id_vehicle';

    public function partner()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_partner', 'id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'id_category', 'id_category');
    }
}
