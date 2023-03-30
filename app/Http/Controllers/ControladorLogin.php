<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ControladorLogin extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        
        // Consultar al usuario en la base de datos
        $user = DB::table('usuario')
            ->where('correo', $request->email)
            ->first();
        
        // Verificar si se encontró al usuario y la contraseña es correcta
        if ($user && $request->password ==$user->password) {
            // Redireccionar al usuario a la página de inicio después del inicio de sesión exitoso
            return redirect()->route('Home');
        }

        // Si no se encontró al usuario en la base de datos, redireccionar al usuario de vuelta al formulario de inicio de sesión con un mensaje de error
        return redirect()->route('login')->with('error', 'Credenciales inválidas');
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
