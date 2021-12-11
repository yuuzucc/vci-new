<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('events',[
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }
    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
