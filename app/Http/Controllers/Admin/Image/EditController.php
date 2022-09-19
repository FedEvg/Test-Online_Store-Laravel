<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Clothing;
use App\Models\Image;

class EditController extends Controller
{
    public function __invoke(Image $image)
    {
        $clothes = Clothing::all()->sortByDesc('created_at');
        return view('admin.image.edit', compact('image', 'clothes'));
    }
}
