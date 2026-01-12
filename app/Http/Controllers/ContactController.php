<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        // Honeypot
        if ($request->filled('website')) {
            return redirect()->back()->with('success', 'Thank you for contacting us.');
        }

        $data = $request->validate([
            'company' => 'nullable|string|max:120',
            'name'    => 'required|string|min:2|max:80',
            'email'   => 'required|email',
            'message' => 'required|string|min:10|max:4000',
        ]);

        $to = config('mail.contact_to');

        if (empty($to)) {
            Log::error('MAIL_CONTACT_TO is not configured');
            return redirect()
                ->back()
                ->withErrors(['message' => 'Unable to send message at this time. Please try again later.']);
        }

        Mail::raw(
            "Company: " . ($data['company'] ?? 'N/A') . "\n"
            . "Name: {$data['name']}\n"
            . "Email: {$data['email']}\n\n"
            . $data['message'],
            function ($m) use ($data, $to) {
                $m->to($to)
                  ->replyTo($data['email'])
                  ->subject('[Website Contact] Tercum LLC');
            }
        );

        return redirect()
            ->back()
            ->with('success', 'Thank you for contacting us. Our team will be in touch shortly.');
    }
}
