<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem',
            'text' => 'lorem ipsum dolor set amet',
        ];

        $posts = array_fill(0, 5, $post);

        return view('blog.index', compact('posts'));
    }
    public function show($post)
    {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem',
            'text' => 'lorem ipsum dolor set amet',
        ];
        $posts = array_fill(0, 5, $post);

        return view('blog.show', compact('post'));
    }
    public function like($post)
    {
        return "Postav like";
    }

}
