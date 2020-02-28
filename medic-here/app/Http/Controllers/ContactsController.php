<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $contact = new Contact;

        $contact->name = $name;
        $contact->email = $email;
        $contact->message = $message;

        $contact->save();

        $response = array(
            'status' => 'success'
        );
        return response()->json($response); 
    }
}
