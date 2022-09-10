<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clothing\UpdateRequest;
use App\Models\Clothing;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Clothing $clothing)
    {
        $data = $request->validated();

        $colorIds = $data['color_ids'];
        $sizeIds = $data['size_ids'];
        unset($data['color_ids']);
        unset($data['size_ids']);

        $clothing->update($data);
        $clothing->colors()->sync($colorIds);
        $clothing->sizes()->sync($sizeIds);

        return redirect()->route('admin.clothing.index');
    }
}
