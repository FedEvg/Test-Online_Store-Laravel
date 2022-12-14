<?php

namespace App\Http\Controllers\Client\Clothing;

use App\Http\Controllers\Controller;
use App\Models\Clothing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clothes = Clothing::query()->orderByDesc('created_at')->paginate(15);
        return view('client.clothing.index', compact('clothes'));
    }
}
