<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Test;

class MailController extends Controller
{
    public function mail(Request $request)
    {
        $email = $request->input('email');

        Mail::to($email)->send(new Test($email));
      
        return ['message'=>'email created'];
    }
}
