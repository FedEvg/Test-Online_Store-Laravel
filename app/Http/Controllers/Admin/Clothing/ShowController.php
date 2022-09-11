<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Models\Clothing;

class ShowController extends BaseController
{
    public function __invoke(Clothing $clothing)
    {
        return view('admin.clothing.show', compact('clothing'));
    }
}
