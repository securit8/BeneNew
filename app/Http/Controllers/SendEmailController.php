<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\BeneMail;




class SendEmailController extends Controller
{
    public function index()
    {
 
      Mail::to('info@bene-exclusive.com')->send(new BeneMail());
 
      if (Mail::failures()) {
        dd("failure");
           return response()->Fail('Sorry! Please try again latter');
           
      }else{
        dd("failure");
           return response()->success('Great! Successfully send in your mail');
          
         }
    } 
}
