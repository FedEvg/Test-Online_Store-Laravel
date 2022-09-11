<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Clothing;
use App\Models\Color;
use App\Models\Size;

class EditController extends BaseController
{
    public function __invoke(Clothing $clothing)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('admin.clothing.edit', compact('clothing', 'categories', 'brands', 'colors', 'sizes'));
    }
}
