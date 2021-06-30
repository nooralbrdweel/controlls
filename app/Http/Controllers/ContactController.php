<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact(){
return view('contact');
    }

    public function index(){

            $contact =Contact::all();
            return view('contact-list' , compact('contacts');
    }

    public function store(Request $request )
    $contact = newContact ;
    $contact->fName= $request->firstname;
    $contact->lName= $request->lastname;
    $contact->email= $request->email;
    $contact->save();
    return redirect()->back();
}
}
