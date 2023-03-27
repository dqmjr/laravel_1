<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница главной страницы';
    }
    public function create()
    {
        return 'Страница создание поста';
    }
    public function show($post)
    {
        return "Детальная страница {$post} данного поста";
    }
}
