<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function store(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $remember = $request->boolean('remember');
        dd($email, $password, $remember);


//        dd($request->all());
    }
}
