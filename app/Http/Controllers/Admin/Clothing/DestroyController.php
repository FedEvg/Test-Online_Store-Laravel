<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Controllers\Controller;
use App\Models\Clothing;

class DestroyController extends Controller
{
    public function __invoke(Clothing $clothing)
    {
        $clothing->delete();

        return redirect()->route('admin.clothing.index');
    }
}
