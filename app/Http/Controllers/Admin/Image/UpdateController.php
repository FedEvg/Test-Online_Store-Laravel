<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\UpdateRequest;
use App\Models\Image;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Image $image)
    {
        $data = $request->validated();

        $image->update($data);

        return redirect()->route('admin.image.index');
    }
}
