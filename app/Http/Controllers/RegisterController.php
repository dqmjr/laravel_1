<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('registration.index');
    }
    public function store(Request $request) {
//        $data = $request->all();
//        $data = $request->all('name', 'email');
//        $data = $request->except('_token');   //Исключения

        $name = $request->input('name');    //if value is empty return 'null'
        $email = $request->email;               //with input() identical
        dd($name,$email);
    }
}
