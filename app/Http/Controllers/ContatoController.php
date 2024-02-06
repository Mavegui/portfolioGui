<?php

namespace App\Http\Controllers;

use App\Mail\Contato;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contato()
    {
        return view('mail.contato');
    }

    public function store(Request $request)
    {
        Mail::to(users: 'lord77xgui@gmail.com', name: 'Guilherme')->send(new Contato(data:[

        'fromName' => $request->input(key: 'name'),
        'fromEmail' => $request->input(key: 'email'),
        'subject' => $request->input(key: 'subject'),
        'message' => $request->input(key: 'message'),
            
        ]));

        return redirect()->route('mail.contato')->with('sucesso', 'Mensagem enviada com sucesso!');
    }

}
