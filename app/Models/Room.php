<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function getfloor(){
        return $this->belongsTo(Floor::class,'floor_id');
    }

    public function getroomguests(){
        return $this->hasMany(Guest::class,'room_id');
    }
}
