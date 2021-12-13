<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('home',[
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }
    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::where('slug',$slug)->first()
        ]);
    }
    public function player(){
        return view('player',[
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }
    public function events(){
        return view('events',[
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }
    public function showE($slug)
    {
        return view('event', [
            "title" => "Single Post",
            "post" => Post::where('slug',$slug)->first()
        ]);
    }

}
