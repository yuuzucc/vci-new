<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('home',[
            "title" => "Posts",
            "posts" => Post::latest()->get()
        ]);
    }

    public function indexe(){
        return view('home',[
            "title" => "Posts",
            "posts" => Post::latest()->paginate(4)
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
            "posts" => Post::latest()->get()
        ]);
    }

    public function events(){
        $search = Post::latest();
        if(request('search')){
            $search->where('title','like','%' . request('search') . '%');
        }
        return view('events',[
            "title" => "Events",
            "posts" => $search->get()
        ]);
    }

    public function showE($slug)
    {
        return view('event', [
            "title" => "Single Post",
            "post" => Post::where('slug',$slug)->first()
        ]);
    }

    public function posts(){
        return view('news',[
            "title" => "All News",
            "posts" => Post::latest()->get()
        ]);
    }
}
