<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function sendViaAjax(Request $request)
    {
        // Validate the incoming form data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the data to the database (assuming you have a Message model and migration set up)
        $message = Message::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        $data = [
            'name' => $validated['full_name'],
            'email' => $validated['email']
        ];

        Mail::to($data['email'])->send(new WelcomeEmail($data));

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
