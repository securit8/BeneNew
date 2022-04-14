<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\BeneMail;



class SendEmailController extends Controller
{
    public function index(Request $request)
    {

     $fullName = $request->input('fullName');
     $email=$request->input('email');
     $phone = $request->input('phone');
     $aboutText=$request->input('aboutText');
 $data = [
     'fullName'=>$fullName,
     'email'=>$email,
     'phone'=>$phone,
     'aboutText'=>$aboutText

 ];

     Mail::send('SendEmail', $data, function($message) 
     {
          $message->to('info@bene-exclusive.com', 'Site Requests')->subject
          ('Site Requests');
          $message->from('info@tlc.com.ge' , 'oTo' );
     

     // Mail::to('info@bene-exclusive.com')->send();

    } );
}

}