<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Agrega esta línea para importar la clase User


class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login'); // Asegúrate de tener una vista llamada auth.login
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            // Autenticación fallida, volver al formulario de inicio de sesión con un mensaje de error
            return back()->withErrors([
                'message' => 'Credenciales incorrectas. Por favor, inténtalo de nuevo.',
            ]);
        }

        // Autenticación exitosa, redirigir al usuario
        Auth::login($user);
        return redirect()->intended('/dashboard');
    }
}
