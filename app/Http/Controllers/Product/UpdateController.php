<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        // Обновление изображения
        if (isset($data['preview_image'])) {
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }

        // Обновление основной информации продукта
        $product->update($data);

        // Обновление связей с тегами
        if (isset($data['tags'])) {
            $product->tags()->sync($data['tags']); // Удаляет старые и добавляет новые связи
        }

        // Обновление связей с цветами
        if (isset($data['colors'])) {
            $product->colors()->sync($data['colors']); // Удаляет старые и добавляет новые связи
        }

        return redirect()->route('product.show', $product->id);
    }
}

