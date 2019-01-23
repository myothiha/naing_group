<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use Carbon\Carbon;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
       return view('admin.contacts.index',[
            'contacts'          => $contacts,
            'mainteam'           => 'active',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->address                   = $request->address;
        $contact->phone                     = $request->phone;
        $contact->mail                      = $request->mail;
        $contact->office                    = $request->office;
        $contact->save();

        return redirect('admin/contact');
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
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('admin.contacts.edit',[

            'contact' => $contact
             ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->address               = $request->address;
        $contact->mail                  = $request->mail;
        $contact->phone                 = $request->phone;
        $contact->office                = $request->office;
        $contact->save();

        return redirect('admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indexdata = Indexdata::find($id);
      $indexdata->delete();

      return redirect('admin/indexdata');
    }
}
