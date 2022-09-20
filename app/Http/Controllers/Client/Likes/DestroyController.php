<?php

namespace App\Http\Controllers\Client\Likes;

use App\Http\Controllers\Controller;
use App\Models\Clothing;

class DestroyController extends Controller
{
    public function __invoke(Clothing $clothing)
    {
        auth()->user()->likedClothes()->detach($clothing->id);

        return redirect()->route('client.likes.index');
    }
}
