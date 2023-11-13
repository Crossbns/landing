<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Asegúrate de que tu modelo Usuario esté definido
use Illuminate\Routing\Controller; // Importa la clase Controller

class DeleteController extends Controller
{
    public function eliminar(Request $request)
    {
        $id = $request->id;

        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->delete();
            return back()->with('success', 'Usuario Eliminado Correctamente');
        } else {
            return back()->with('error', 'Error al Eliminar');
        }
    }
}
