<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {

        return view('tags.edit', compact('tag'));
    }


}
