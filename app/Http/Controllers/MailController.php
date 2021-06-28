<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details=[
            'title' => 'Hola MCV Restaurant le invita a formar parte del sistema',
            'body' => 'Este es un mensaje para notificar que ha sidoinscrito en el sistema'
        ];

        Mail::to("adrian.estevez7475@alumnos.udg.mx")->send(new TestMail($details));
        return "Correo Electrónico Enviado";
    }
}
