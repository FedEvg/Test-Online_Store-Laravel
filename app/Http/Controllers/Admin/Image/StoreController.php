<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\StoreRequest;
use App\Models\Image;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)//
    {
        $request->validated();

        $data = [];
        if ($request->path) {
            foreach ($request->path as $key => $image) {
                $imageName = time() . rand(1, 99) . '.' . $image->extension();
                $image->move(public_path('/storage/images'), $imageName);

                $data[]['path'] = $imageName;
            }
        }
        foreach ($data as $key => $image) {
            Image::firstOrCreate($image);
        }

        return redirect()->route('admin.image.index');
    }
}
