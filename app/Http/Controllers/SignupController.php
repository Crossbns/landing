<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Asegúrate de que tu modelo Usuario esté definido
use Illuminate\Routing\Controller; // Importa la clase Controller

class SignupController extends Controller
{
    public function regist(Request $request)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Usuario' => 'required',
            'Contraseña' => 'required',
            'Validación' => 'required|same:Contraseña',
        ]);

        $usuario = new Usuario;
        $usuario->Nombre = $request->Nombre;
        $usuario->Usuario = $request->Usuario;
        $usuario->Contraseña = bcrypt($request->Contraseña);

        if ($usuario->save()) {
            return redirect('user')->with('success', 'Registro Correcto');
        } else {
            return back()->with('error', 'Error al Registrar');
        }
    }
}
