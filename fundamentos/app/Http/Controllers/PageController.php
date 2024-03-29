<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}%")
            ->with('user')->latest()->paginate();
        return view('home', ["posts" => $posts]);
    }

    // public function blog()
    // {
    //     // $posts = Post::get();
    //     // $posts = Post::first();
    //     // $posts = Post::find(25); // Busca por id
    //     $posts = Post::latest()->paginate();

    //     return view('blog', ["posts" => $posts]);
    // }

    public function post(Post $post)
    {
        return view("post", ["post" => $post]);
    }
}
