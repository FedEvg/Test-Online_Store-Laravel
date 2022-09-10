<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clothing extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clothing';

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'category_id', 'id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'clothing_colors', 'clothing_id','color_id');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'clothing_sizes', 'clothing_id', 'size_id');
    }
}
