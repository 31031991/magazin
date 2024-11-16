<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tags\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        Tag::firstOrCreate($data);

        return redirect()->route('tag.index');
    }
}
