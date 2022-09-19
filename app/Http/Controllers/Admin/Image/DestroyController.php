<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke(Image $image)
    {
        $deletePath = Storage::delete('public\images', $image->path);

        $image->delete();

        return redirect()->route('admin.image.index');
    }
}
