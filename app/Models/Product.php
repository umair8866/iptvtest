<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getpcat(){
        return $this->belongsTo(ProductCat::class,'pcat_id');
    }
}
