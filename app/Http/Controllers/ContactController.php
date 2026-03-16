<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view ('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'number'=>$request->number,
            'subject' => $request->subject,
            'service' => $request->service,
            'message' => $request->message,
        ];

        Mail::to('info@sefcomenvironmental.com')->send(new ContactMail($details));
        return back()->with('message_sent',"Your Message Has Been Sent Successfully!");
    }
}
