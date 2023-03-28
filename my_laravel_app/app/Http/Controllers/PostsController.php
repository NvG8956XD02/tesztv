<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($post){
        $length = Post::getLength($post);
        return view('post',compact('post','length'));
    }
}
