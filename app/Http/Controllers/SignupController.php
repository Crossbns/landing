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
            'nombre' => 'required',
            'usuario' => 'required',
            'contraseña' => 'required|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/',
            'validación' => 'required|same:contraseña',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $usuario = new Usuario;
        $usuario->nombre = $request->Nombre;
        $usuario->usuario = $request->Usuario;
        $usuario->contraseña = bcrypt($request->contraseña);

        if ($usuario->save()) {
            return redirect('login')->with('success', 'Registro Correcto');
        } else {
            return back()->with('error', 'Error al Registrar');
        }
    }
}
