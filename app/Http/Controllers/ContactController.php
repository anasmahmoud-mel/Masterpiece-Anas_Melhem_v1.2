<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        

      
        return view('dashboard_view.index_contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create_contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([

            'contact_fname' => 'required',
            'contact_lname' => 'required',
            'contact_email' => 'required',
            'contact_subject' => 'required',
            'contact_message' => 'required',
           

        ]);
        
        Contact::create($request->all());

        //return redirect()->route('visitors.index')
        return redirect('jurny/contact');
        // ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        // return view('dashboard_view.edit_contact', compact('contact'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        // $request->validate([

        //     'contact_fname' => 'required',
        //     'contact_lname' => 'required',
        //     'contact_email' => 'required',
        //     'contact_subject' => 'required',
        //     'contact_message' => 'required',
           

        // ]);
        // $contact->update($request->all());

        // return redirect('/dashboard/contacts');
        // // ->route('dashboard_view.index_visitor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        toast('Successfully Deleted','success','top-right');
        return redirect('/dashboard/contacts');
        // ->route('visitors.dashboard_view.index_visitor')
    }
}
