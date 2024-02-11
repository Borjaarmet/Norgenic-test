<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function sendContactEmail(Request $request)
    {
        $contactData = $request->validate([
            'contact_email' => 'required|email',
            'contact_message' => 'required|string|min:12',
        ]);
        Lead::create($contactData);
  
        return redirect()->route('contact')->with('contact_success', '¡Gracias! Tu mensaje ha sido enviado.');
    }
}
