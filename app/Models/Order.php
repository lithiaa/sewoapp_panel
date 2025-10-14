<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    // add fillable
    protected $fillable = [
        'id_customer',
        'id_partner',
        'start_date',
        'finish_date',
        'status',
        'total_price',
        'payment_method',
        'payment_gateway_ref',
    ];
    // add guaded
    protected $guarded = ['id_order'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id_order';

    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'id_customer', 'id_customer');
    }

    public function partner()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_partner', 'id');
    }
}
