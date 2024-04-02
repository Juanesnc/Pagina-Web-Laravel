<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){

        $message = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required|min:5'
        ]);

        Mail::to('juan@aprendible.com')->queue(new MessageRecived($message));

        return back()->with('status', 'Mensaje recibido, te responderemos en menos de 24 horas.');
    }
}
