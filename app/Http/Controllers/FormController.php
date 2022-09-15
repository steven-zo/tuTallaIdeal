<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{
    public function formContact(Request $request)
    {

        Mail::to('stevenzapatao.szo@gmail.com')->send(new ContactMail($request->all()));
        return redirect()->back();
    }
}
