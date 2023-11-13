<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail; // Asegúrate de que tu modelo Mail esté definido
use Illuminate\Support\Facades\Mail as MailFacade;
use Illuminate\Routing\Controller; // Importa la clase Controller

class MailController extends Controller
{
    public function make(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'correo' => 'required|email',
        ]);

        $mail = new Mail;
        $mail->Nombre = $request->nombre;
        $mail->Correo = $request->correo;

        if ($mail->save()) {
            $data = [
                'mensaje' => "Estimado usuario, su formulario fue recibido. En breve lo contactaremos",
                'asunto' => "Formulario completado",
            ];

            MailFacade::send([], [], function ($message) use ($data, $request) {
                $message->to($request->correo)
                        ->subject($data['asunto'])
                        ->setBody($data['mensaje'], 'text/html');
            });

            return back()->with('success', 'Correo Enviado');
        } else {
            return back()->with('error', 'Fallo al enviar');
        }
    }
}
