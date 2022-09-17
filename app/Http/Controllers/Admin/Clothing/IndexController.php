<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Models\Clothing;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $clothes = Clothing::all()->sortByDesc('created_at');

        return view('admin.clothing.index', compact('clothes'));
    }
}
