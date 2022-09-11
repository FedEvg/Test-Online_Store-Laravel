<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Models\Clothing;

class DestroyController extends BaseController
{
    public function __invoke(Clothing $clothing)
    {
        $clothing->delete();

        return redirect()->route('admin.clothing.index');
    }
}
