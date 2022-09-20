<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Models\Clothing;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $clothes = Clothing::query()->orderByDesc('created_at')->paginate(15);

        return view('admin.clothing.index', compact('clothes'));
    }
}
