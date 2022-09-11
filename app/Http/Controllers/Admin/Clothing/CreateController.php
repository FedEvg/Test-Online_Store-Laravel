<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('admin.clothing.create', compact('categories', 'brands', 'colors', 'sizes'));
    }
}
