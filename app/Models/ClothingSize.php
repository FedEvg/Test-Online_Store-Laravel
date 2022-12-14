<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothingSize extends Model
{
    use HasFactory;

    protected $table = 'clothing_sizes';

    protected $guarded = [];
}
