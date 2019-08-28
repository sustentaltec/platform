<?php

namespace App\Mailers;

use Mail;
use App\User;

class UserMailer
{
  public function welcome($email, User $user) 
  {
    Mail::send('email.welcome', [
      'user' => $user, function($message) use ($email) {
        $message->to($email)->subject('Seja Bem Vindo!');
      }
    ])
  
  }

}

