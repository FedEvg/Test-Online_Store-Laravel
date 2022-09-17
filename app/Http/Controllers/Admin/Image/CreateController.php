<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Clothing;

class CreateController extends Controller
{
    public function __invoke()
    {
        $clothes = Clothing::all()->sortByDesc('created_at');
        return view('admin.image.create', compact('clothes'));
    }
}
