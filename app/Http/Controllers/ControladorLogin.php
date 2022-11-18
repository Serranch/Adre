<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorLogin;
use Illuminate\Http\Request;

class ControladorLogin extends Controller
{
    function ShowLogin(){
        return view('login');
    }
    function loginUser(ValidadorLogin $req){
        $data = $req->input('txtusuario');
        return redirect()->route('Home')->with('usuario', compact('data'));
    }
}
