<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\UpdateRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Image $image)
    {
        $data = $request->validated();

        $data['path'] = Storage::disk('public')->put('/images', $data['path']);

        $image->update($data);

        return redirect()->route('admin.image.index');
    }
}
