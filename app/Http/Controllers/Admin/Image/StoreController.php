<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\StoreRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $arr = [];
        foreach ($data['path'] as $key => $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/storage/images'), $imageName);
//            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            $arr[]['path'] = $imageName;
        }

        foreach ($arr as $key => $image) {
            $image['clothing_id'] = $data['clothing_id'];
            Image::firstOrCreate($image);
        }

        return redirect()->route('admin.image.index');
    }
}
