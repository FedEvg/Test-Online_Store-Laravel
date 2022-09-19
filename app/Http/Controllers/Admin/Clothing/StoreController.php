<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Requests\Clothing\StoreRequest;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.clothing.index');
    }
}
