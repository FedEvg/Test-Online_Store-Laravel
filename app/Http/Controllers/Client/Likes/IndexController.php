<?php

namespace App\Http\Controllers\Client\Likes;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clothes = auth()->user()->likedClothes;
        return view('client.likes.index', compact('clothes'));
    }
}
