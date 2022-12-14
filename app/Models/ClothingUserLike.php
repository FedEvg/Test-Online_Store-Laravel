<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothingUserLike extends Model
{
    use HasFactory;

    protected $table = 'clothing_user_likes';

    protected $guarded = [];
}
