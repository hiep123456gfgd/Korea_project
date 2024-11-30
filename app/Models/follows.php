<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follows extends Model
{
    use HasFactory;

    protected $table = "follows";
    protected $fillable = [
        'user_id',
        'page_id',


    ];
}
