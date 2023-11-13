<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Asegúrate de que tu modelo Usuario esté definido
use Illuminate\Routing\Controller; // Importa la clase Controller

class UpdateController extends Controller
{
    public function modificar(Request $request)
    {
        $this->validate($request, [
            'Id' => 'required',
            'Nombre' => 'required',
            'Usuario' => 'required',
            'Contraseña' => 'required',
        ]);

        $usuario = Usuario::find($request->Id);

        if ($usuario) {
            $usuario->Nombre = $request->Nombre;
            $usuario->Usuario = $request->Usuario;
            $usuario->Contraseña = bcrypt($request->Contraseña);

            if ($usuario->save()) {
                return redirect('form')->with('success', 'Registro Modificado Correctamente');
            } else {
                return back()->with('error', 'Error al Modificar');
            }
        } else {
            return back()->with('error', 'Registro no encontrado');
        }
    }
}
