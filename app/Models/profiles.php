<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    use HasFactory;
    protected $table = "profiles";
    protected $fillable = [
        'user_id',
        'bio',
        'profile_image',
        'cover_image',
        'birth_date',
    ];
}
