<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    //
        function sendEmail(){
            $to = "testcoding749@gmail.com";
            $msg = "Dummy Text By testing";
            $subject = "This is for testing the laravel mail server";
            Mail::to($to)->send(new WelcomeMail($msg,$subject));
            return "send email";
        }
}
