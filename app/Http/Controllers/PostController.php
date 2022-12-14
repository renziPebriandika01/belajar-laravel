<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts',[
            "title"=>"Posts",
            "posts"=>Post::all()

        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            "title"=>"single-post",
            "post"=>$post
        ]);
    }

}
