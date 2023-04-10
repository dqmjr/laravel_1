<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('registration.index');
    }
    public function store(Request $request) {
//      $data = $request->all(); dd($data);
//      $data = $request->all('name', 'email');
//      $data = $request->except('_token');     //Исключения

        $name = $request->input('name');        // if value is empty return 'null'
        $email = $request->email;                   // with input() identical

//      $approve = !! $request->approve;            // !! for true or false
        $approve = $request->boolean('approve');

//      $file = $request->file('file');             // for work with files

//      dd($request->has('name'));                  // Проверка на наличие переменных
//      dd($request->filled('email'));              // Проверка на заполнение данных, 'missing' наоборот

        if ($request->filled('email')) {
            dd(dd($name, $email, $approve));
        }

    }
}
