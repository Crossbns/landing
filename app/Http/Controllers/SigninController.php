<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SigninController extends Controller
{
    public function iniciar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'usuario' => 'required',
            'contraseña' => 'required|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $usuario = Usuario::where('usuario', $request->Usuario)->first();

        if ($usuario && Hash::check($request->Contraseña, $usuario->Contraseña)) {
            return redirect('adm')->with('success', 'Sesión Iniciada');
        } else {
            return back()->with('error', 'Datos Inválidos');
        }
    }
}
