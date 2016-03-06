<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';

    public function order_items(){
        return $this->hasMany('App\Models\OrderItems','order_id');
    }
}
