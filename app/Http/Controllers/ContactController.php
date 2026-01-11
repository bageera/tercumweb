<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'company' => 'nullable|string|max:120',
            'name'    => 'required|string|min:2|max:80',
            'email'   => 'required|email',
            'message' => 'required|string|min:10|max:4000',
            'website' => 'nullable|size:0', // honeypot
        ]);

        Mail::raw(
            "Company: {$data['company']}\n"
            . "Name: {$data['name']}\n"
            . "Email: {$data['email']}\n\n"
            . $data['message'],
            function ($m) use ($data) {
                $m->to(config('mail.contact_to'))
                  ->replyTo($data['email'])
                  ->subject('[Contact] New message from Tercum LLC website');
            }
        );

        return redirect()
            ->back()
            ->with('success', 'Thank you for contacting us. We’ll be in touch shortly.');
    }
}
