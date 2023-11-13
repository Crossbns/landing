<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Asegúrate de que tu modelo Usuario esté definido
use Illuminate\Routing\Controller; // Importa la clase Controller

class SigninController extends Controller
{
    public function iniciar(Request $request)
    {
        $this->validate($request, [
            'Usuario' => 'required',
            'Contraseña' => 'required',
        ]);

        $usuario = $request->Usuario;
        $contraseña = $request->Contraseña;

        $usuario = Usuario::where('Usuario', $usuario)->where('Contraseña', $contraseña)->first();

        if ($usuario) {
            return redirect('adm')->with('success', 'Sesión Iniciada');
        } else {
            return back()->with('error', 'Datos Inválidos');
        }
    }
}
