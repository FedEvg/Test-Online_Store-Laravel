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

        $data['image'] = Storage::disk('public')->put('/images', $data['image']);

        Image::query()->firstOrCreate($data);

        return redirect()->route('admin.image.index');
    }
}
