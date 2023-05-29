<?php

namespace App\Http\Controllers;

use App\Mail\MyTestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MaillController extends Controller
{
    public function send(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);


//        // Send email
//        Mail::send('emails.contact', ['data' => $validatedData], function ($message) use ($validatedData) {
//            $message->from(config('mail.from.address'), config('mail.from.name'));
//            $message->to('your-email@example.com');
//            $message->subject('New contact form submission');
//        });

        Mail::to('spacecavez.edu.eg@gmail.com')->send(new MyTestEmail($validatedData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon.');

    }
}
