<?php

namespace App\Http\Controllers;

use function PHPSTORM_META\type;

class BlogPostsController extends Controller
{
    public function index($type)
    {
        return view("blog.posts.$type");
    }
}
