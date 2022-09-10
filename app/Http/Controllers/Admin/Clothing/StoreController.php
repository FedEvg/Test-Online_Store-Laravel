<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clothing\StoreRequest;
use App\Models\Clothing;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $colorIds = $data['color_ids'];
        $sizeIds = $data['size_ids'];
        unset($data['color_ids']);
        unset($data['size_ids']);

        $clothing = Clothing::query()->firstOrCreate($data);
        $clothing->colors()->attach($colorIds);
        $clothing->sizes()->attach($sizeIds);

        return redirect()->route('admin.clothing.index');
    }
}
