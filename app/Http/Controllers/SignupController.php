<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function regist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required',
            'Usuario' => 'required',
            'Contraseña' => 'required|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/',
            'Validación' => 'required|same:Contraseña',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

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
