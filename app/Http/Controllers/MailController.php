<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail($email){

        $this->validationRules = [
            "email" => ['required','email:rfc'],
        ];

        Mail::to($email)->send(new TestMail());
        return "Correo Electrónico Enviado";
    }
}
