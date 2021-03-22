<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends BaseController
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $contact = Contact::first();
        return view('admin.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $contact = Contact::find($id);
        $contact->update( [
            'phone_1'=>$request->phone_1,
            'phone_2'=>$request->phone_2,
            'fax'=>$request->fax,
            'viber'=>$request->viber,
            'telegram'=>$request->telegram,
            'email1'=>$request->email1,
            'email2'=>$request->email2,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,

        ]);

        $contact->translate()->update( [
            'title'=>$request->title,
            'address'=>$request->address,

        ]);
        return redirect()->route('contacts.edit',['id'=> 1])->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
