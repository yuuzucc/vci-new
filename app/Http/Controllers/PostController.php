<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "VCI",
            "posts" => Post::latest()->paginate(3),
            "events" => Event::latest()->paginate(4)
        ]);
    }

    public function posts()
    {
        $post = Post::latest();
        if (request('search')) {
            $post->where('title', 'like', '%' . request('search') . '%');
        }
        return view('news', [
            "title" => "News List",
            "posts" => $post->paginate(4)->withQueryString()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Post details",
            "post" => Post::where('slug', $slug)->first()
        ]);
    }



    public function events()
    {
        $search = Event::latest();
        if (request('search')) {
            $search->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('format', 'like', '%' . request('search') . '%')
                ->orWhere('date', 'like', '%' . request('search') . '%')
                ->orWhere('time', 'like', '%' . request('search') . '%');
        }
        return view('events', [
            "title" => "Events",
            "events" => $search->paginate(8)->withQueryString()
        ]);
    }

    public function showE($slug)
    {
        return view('event', [
            "title" => "Event details",
            "post" => Event::where('slug', $slug)->first()
        ]);
    }
}
