<?php

namespace App\Http\Controllers;

use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        // //without model
        // $post = DB::table('posts')->where('slug', $slug)->first();

        // $post = Post::where('slug', $slug)->first();

        // if (! $post) {
        //     abort(404);
        // }

        // $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
