<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail; // Asegúrate de que tu modelo Mail esté definido
use Illuminate\Routing\Controller; // Importa la clase Controller

class AddController extends Controller
{
    public function crear(Request $request)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Correo' => 'required|email',
        ]);

        $mail = new Mail;
        $mail->Nombre = $request->Nombre;
        $mail->Correo = $request->Correo;

        if ($mail->save()) {
            return redirect('form')->with('success', 'Registro Correcto');
        } else {
            return back()->with('error', 'Error al Registrar');
        }
    }
}
