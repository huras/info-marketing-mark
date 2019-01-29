<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    function list(){
        $total = count(Contact::all());
        $contacts = Contact::orderBy('created_at', 'desc')->paginate('20');
        return view('criador/contact/list', compact('contacts', 'total'));
    }

    function create(Request $request){
        $contact = Contact::create($request->all());
        return redirect()->action('PagesController@contact');
    }

    function view($id){
        $contact = Contact::findOrFail($id);
        return view('criador/contact/view', compact('contact'));
    }

    public function destroy (Request $request, $id) {        
        $item = Contact::find($id);
        $item->delete();

        return redirect()->action('ContactsController@list');
    }
}
