<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $guard = 'guest';
    

    public function getfloornum(){
        return $this->belongsTo(Floor::class,'floor_id');

    }

    public function getroomnum(){
        return $this->belongsTo(Room::class,'room_id');
    }

}
