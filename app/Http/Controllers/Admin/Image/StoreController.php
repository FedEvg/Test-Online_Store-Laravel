<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\StoreRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)//
    {
        $request->validated();
//
//        foreach ($request->file('image') as $imagefile) {
//            $name = time().'.'.$imagefile->getClientOriginalName();
//            dump($name);
//        }

//        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
//
//        Image::query()->firstOrCreate($data);
//
//        return redirect()->route('admin.image.index');
    }
}
