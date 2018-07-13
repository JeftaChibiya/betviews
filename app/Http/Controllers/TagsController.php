<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    public function store(Request $request)
    {
        $tag = new Tag;

        $tag->name = $request->name;

        $tag->save();
    }
}
