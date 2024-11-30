<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    use HasFactory;
    protected $table = "pages";
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'profile_image',
        'cover_image',

    ];
}
