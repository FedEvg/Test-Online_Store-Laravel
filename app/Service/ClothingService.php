<?php

namespace App\Service;

use App\Models\Clothing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            $clothing = Clothing::query()->firstOrCreate($data);
            $clothing->colors()->attach($colorIds);
            $clothing->sizes()->attach($sizeIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(404);
        }
    }

    public function update(Clothing $clothing, $data)
    {
        try {
            DB::beginTransaction();
            $colorIds = $data['color_ids'];
            $sizeIds = $data['size_ids'];

            unset($data['color_ids']);
            unset($data['size_ids']);

//            if (isset($data['preview_image'])) {
//                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
//            }
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
