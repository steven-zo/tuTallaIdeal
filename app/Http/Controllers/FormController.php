<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{
    public function formContact(Request $request)
    {
        Mail::send('mensaje',$request->all(), function($msj, $request){
            $emails = ['stevenzapatao.szo@gmail.com'];
            $msj->to($emails)->subject('Nuevo Mensaje de '.$request['name']);
        });
    }
}
