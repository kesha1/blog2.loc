<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getHome(){
        $posts = Post::where('published', 1)->paginate(5);
        return view('home')->with([
            'posts' => $posts
        ]);
    }
}
