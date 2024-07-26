<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController
{
     public function index()
     {
          $message = '';

          if ($_SERVER["REQUEST_METHOD"] == 'POST') {
               $name = $_POST['name'];
               $email = $_POST['email'];
               $message = $_POST['message'];

               $contact = new Contact();
               $success = $contact->send($name, $email, $message);

               $message = $success 
                    ? 'Your message has been sent successfully!'
                    : 'Failed to send your message. Please try again.';               
          }

          include '../src/Views/contact.php';
     }
}