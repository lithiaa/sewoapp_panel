<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //

    // add fillable
    protected $fillable = [
        'id_order',
        'id_vehicle',
        'price',
        'total_days',
        'total_price',
    ];
    // add guaded
    protected $guarded = ['id_order_detail'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id_order_detail';

    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class, 'id_order', 'id_order');
    }
    public function vehicle()
    {
        return $this->belongsTo(\App\Models\Vehicle::class, 'id_vehicle', 'id_vehicle');
    }
}
