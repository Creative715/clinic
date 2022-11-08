<?php

namespace App\Http\Controllers;

use App\Mail\RequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if ($request -> method() == 'POST'){

            $body = "<p>Ім'я: {$request->input('name')}</p>";
            $body .= "<p>Дата: {$request->input('date')}</p>";
            $body .= "<p>Телефон: {$request->input('phone')}</p>";
            $body .= "<p>Що турбує:<br>" . nl2br($request->input('massage')) . "</p>";
        }
        Mail::to('info@wdesign.net.ua')->send(new RequestMail($body));
        return view('app.send');
    }
}
