<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_status extends Model
{
    use HasFactory;
    protected $table='order_statuses';

    public function showorders(){
        return $this->hasMany(Order::class,'order_status');
    }
}
