<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index');
    }
    
    
    public function create()
    {
        return view('contacts.create');
    }
    
    
    public function edit(Contact $contact)
    {
        return view('contacts.view', compact('contact'));
    }
    
    
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->only('name', 'phone'));
        return redirect('contacts');
    }
   
    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect('contacts');
    }  
}
