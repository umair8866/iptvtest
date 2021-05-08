<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function orderdetail(){
        return $this->belongsTo(Order_detail::class,'order_id');
    }
    public function getorderstatus(){
        return $this->belongsTo(Order_status::class,'order_status');
    }
}
