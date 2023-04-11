<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem',
            'text' => 'lorem ipsum dolor set amet',
        ];

        $posts = array_fill(0, 5, $post);

        return view('user.posts.index', compact('posts'));
    }
    public function create()
    {
        return view('user.posts.create');
    }
    public function show($post)
    {
        $post = (object) [
            'id' => 1,
            'title' => '1ый пост',
            'text' => 'lorem ipsum dolor set amet',
        ];
        $posts = array_fill(0, 5, $post);

        return view('user.posts.show', compact('post'));
    }
    public function edit($post)
    {
        $post = (object) [
            'id' => 1,
            'title' => '1ый пост',
            'text' => 'lorem ipsum dolor set amet',
        ];
        return view('user.posts.edit', compact('post'));
    }
    public function store(Request $request) {
        $title = $request->title;

        dd($title);
    }
    public function update (Request $request) {
        $title = $request->input('title');

        dd($title);
    }
}
