<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Controllers\Controller;
use App\Service\ClothingService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ClothingService $service)
    {
        $this->service = $service;
    }
}
