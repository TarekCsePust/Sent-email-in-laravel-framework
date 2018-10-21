<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\mail\SendMail;
class MailController extends Controller
{
     public function basic_email(){
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('hasantarek12cse@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('hasantarek12cse@gmail.com','Virat Gandhi');
      });
      echo "Basic Email Sent. Check your inbox.";
   }

   public function sent_email(){
      
      Mail::send(new SendMail());

      echo "Basic Email Sent. Check your inbox.";
   }
}
