<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function send()
    {
        $Data = [
            'Name' => 'Demo Name',
            'Email' => 'demo@demo.com',
            'Subject' => 'Demo Subject',
            'Message' => 'Demo Messasge',
        ];

        Mail::send(['text' => 'mail'],$Data, function($Message){
            $Message->to('mail4mjaman@gmail.com','Ferdawus')
            ->subject('Message From Application')
            ->from('info@demo.com');
        });

        return "Email Send Done";
    }
}
