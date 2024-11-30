<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friendships extends Model
{
    use HasFactory;

    protected $table = "friendships";
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'status'

    ];
}
