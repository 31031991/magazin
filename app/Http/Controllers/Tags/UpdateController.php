<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tags\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request , Tag $tag)
    {
        $data = $request->validated();
        $tag ->update($data);


        return view('tags.show', compact('tag'));
    }
}