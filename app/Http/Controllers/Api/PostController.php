<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Api Страница главной страницы';
    }
    public function create()
    {
        return 'Api Страница создание поста';
    }
    public function show($post)
    {
        return "Api Детальная страница {$post} данного поста";
    }
}
