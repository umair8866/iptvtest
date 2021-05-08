<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    public function getroom(){
        return $this->hasMany(Room::class,'floor_id');
    }

    public function getfloorguests(){
        return $this->hasMany(Guest::class,'floor_id');
    }
}
