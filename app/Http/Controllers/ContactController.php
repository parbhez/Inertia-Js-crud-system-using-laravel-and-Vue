<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactMessageRequest;

class ContactController extends Controller
{
    public $data;

    public function index()
    {
        return Inertia::render('ContactMessage/Contact', [
            'contact_messages' => Contact::all(),
            'title' => 'All Contact Messages'
        ]);

        // echo 'ji - from dev';
        // echo 'ji - from dev';
        // echo 'ji - from dev';
        // echo 'ji - from dev222';
        // echo 'ji - from dev333';

    }

    public function create()
    {
        return Inertia::render('ContactMessage/Create', [
            'title' => 'Create Contact'
        ]);
    }

    public function store(ContactMessageRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect()->route('contact.index');
    }

    public function edit($id)
    {
       return Inertia::render('ContactMessage/Edit', [
        'contactMessage' => Contact::findOrFail($id),
        'title' => 'Edit Contact'
       ]);

    //    from master - 1
    //    from master - 2

    }

    public function update(contactMessageRequest $request, $id)
    {
        $validated = $request->validated();
        $contactMessage = Contact::findOrFail($id);
        $contactMessage->update($validated);
        return redirect()->route('contact.index');
    }

    public function destroy($id)
    {
        $contactMessage = Contact::findOrFail($id);
        $contactMessage->delete();
        return redirect()->route('contact.index');
    }

}
