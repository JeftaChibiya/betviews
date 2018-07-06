<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    public function all()
    {
        return Tag::pluck('name', 'id');
    }
}
