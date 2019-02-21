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

        $params = [];
        $params['window_msg'] = 'Sent with succes!';
        $params['window_msg_context'] = 'success';
        
        $topics = ['Sugestion' ,'Other'];
        return view('pages/contact', compact('topics','params'));
    }

    public function contact(){
        $topics = ['Sugestion' ,'Other'];
        return view('pages/contact', compact('topics'));
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
