<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterContact;

class NewsletterContactController extends Controller
{
    public function destroy (Request $request, $id) {
        $item = NewsletterContact::find($id);
        $item->delete();

        return redirect()->action('CriadorController@subscriptions');
    }
}
