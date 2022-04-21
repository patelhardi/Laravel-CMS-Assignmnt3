<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function list()
    {

        return view('contacts.list', [
            'contacts' => Contact::all()
        ]);

    }

    public function editForm(Contact $contact)
    {

        return view('contacts.edit', [
            'contact' => $contact,
        ]);

    }

    public function edit(Contact $contact)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
            ],
            'phone' => 'required',
            'message' => 'required',
            'url' => 'nullable',
        ]);

        $contact->name = $attributes['name'];
        $contact->email = $attributes['email'];
        $contact->phone = $attributes['phone'];
        $contact->message = $attributes['message'];
        $contact->url = $attributes['url'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been edited!');

    }
}
