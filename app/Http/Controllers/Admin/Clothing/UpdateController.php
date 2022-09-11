<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Requests\Clothing\UpdateRequest;
use App\Models\Clothing;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Clothing $clothing)
    {
        $data = $request->validated();

        $clothing = $this->service->update($clothing, $data);

        return redirect()->route('admin.clothing.show', compact('clothing'));
    }
}
