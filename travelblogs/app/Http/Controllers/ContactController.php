<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:5',
            'gender' => 'required|in:male,female,other',
            'phone' => 'required|string|max:20',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
