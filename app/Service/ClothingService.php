<?php

namespace App\Service;

use App\Models\Clothing;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class ClothingService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();

            $colorIds = $data['color_ids'];
            $sizeIds = $data['size_ids'];

            unset($data['color_ids']);
            unset($data['size_ids']);

            $clothing = Clothing::query()->firstOrCreate($data);
            $clothing->colors()->attach($colorIds);
            $clothing->sizes()->attach($sizeIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(404);
        }
    }

    public function update(Clothing $clothing ,$data)
    {
        try {
            DB::beginTransaction();
            $colorIds = $data['color_ids'];
            $sizeIds = $data['size_ids'];
            unset($data['color_ids']);
            unset($data['size_ids']);

            $clothing->update($data);
            $clothing->colors()->sync($colorIds);
            $clothing->sizes()->sync($sizeIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $clothing;
    }
}
