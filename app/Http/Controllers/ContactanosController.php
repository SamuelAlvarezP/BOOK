<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function store(Request $request){
    $request->validate([
        'Nombre' => 'required',
        'Celular' => 'required', 'alpha_num',
        'Email' => 'required','email',
        'Mensaje' => 'required','min:5'

    ]);
    $correo = new ContactanosMailable($request->all());
    Mail::to('lfmejia686@misena.edu.co')->send($correo);
    return redirect()->route('welcome')->with('info','Mensaje enviado, pronto nos pondremos en contacto contigo.');
    }
}
