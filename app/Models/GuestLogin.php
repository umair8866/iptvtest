<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestLogin extends Model
{
    use HasFactory;
    protected $guard = 'guest';
    protected $fillable = [
         'guestid', 'password',
    ];
}
