<?php

namespace App\Models;

class Contact
{
     public function send($name, $email, $message)
     {
          $to = 'example@example.com';
          $subject = 'New Contact Form Submission';
          $body = "Name: $name\nEmail: $email\nMessage: $message";
          $headers = "From: $email";

          return mail($to, $subject, $body, $headers);
     }
}