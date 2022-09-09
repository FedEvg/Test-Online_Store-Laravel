<?php

namespace App\Http\Controllers\Admin\Size;

use App\Http\Controllers\Controller;
use App\Http\Requests\Size\StoreRequest;
use App\Models\Size;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Size::query()->firstOrCreate($data);

        return redirect()->route('admin.size.index');
    }
}
