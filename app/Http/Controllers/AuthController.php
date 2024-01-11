<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar el login
    public function login(Request $request)
    {
        // Validar las credenciales
        $credentials = $request->only('email', 'password');

        // Verificar si el correo es el permitido y la contraseña es correcta
        if ($credentials['email'] === '2022150482259@tesjo.edu.mx' && $credentials['password'] === 'Daniel123') {
            // Realizar la autenticación
            if (auth()->attempt($credentials)) {
                // Las credenciales son válidas, el usuario ha iniciado sesión correctamente
                return redirect('/incio');
            }
        }

        // Si el correo no es el permitido o las credenciales son inválidas,
        // redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
        return back()->withErrors(['email' => 'Credenciales inválidas']);
    }

    // Mostrar el formulario de recuperación de contraseña
    public function showPasswordResetForm()
    {
        return view('auth.password-reset');
    }

// Procesar la solicitud de recuperación de contraseña
public function sendPasswordResetLink(Request $request)
{
    // Validar el campo de correo electrónico
    $request->validate(['email' => 'required|email']);

    // Enviar el enlace de restablecimiento de contraseña
    Password::sendResetLink($request->only('email'));

    // Redirigir de nuevo al formulario de recuperación de contraseña con un mensaje de éxito
    return back()->with('status', 'Enlace de restablecimiento de contraseña enviado correctamente.');
}

}
