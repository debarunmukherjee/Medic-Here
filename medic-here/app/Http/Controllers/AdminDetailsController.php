<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;
use PDF;

class AdminDetailsController extends Controller
{
    public function index()
    {
        if(!(Auth::user() && Auth::user()->role =='admin'))
        {
            return redirect('/');
        }

        $contacts = Contact::all();

        return view('pages.admin_table')->with('contacts', $contacts);
    }

    public function pdf()
    {
        if(!(Auth::user() && Auth::user()->role =='admin'))
        {
            return redirect('/');
        }

        $data['title'] = 'Contacts List';
        $data['contacts'] =  Contact::get();
    
        $pdf = PDF::loadView('pages.contacts_pdf', $data);
    
        return $pdf->download('contact_list.pdf');
    }
}
