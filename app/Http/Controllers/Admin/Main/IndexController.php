<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Clothing;
use App\Models\Color;
use App\Models\Image;
use App\Models\Size;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $countCategory = Category::all()->count();
        $countColor = Color::all()->count();
        $countBrand = Brand::all()->count();
        $countSize = Size::all()->count();
        $countClothing = Clothing::all()->count();
        $countImage = Image::all()->count();
        $countUser = User::all()->count();
        return view('admin.main.index', compact('countCategory', 'countColor', 'countBrand', 'countSize', 'countClothing', 'countImage', 'countUser'));
    }
}
