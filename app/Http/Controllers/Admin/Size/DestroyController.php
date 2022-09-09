<?php

namespace App\Http\Controllers\Admin\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;

class DestroyController extends Controller
{
    public function __invoke(Size $size)
    {
        $size->delete();

        return redirect()->route('admin.size.index');
    }
}
