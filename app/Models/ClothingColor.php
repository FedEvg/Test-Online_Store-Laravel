<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothingColor extends Model
{
    use HasFactory;

    protected $table = 'clothing_colors';

    protected $guarded = [];
}
