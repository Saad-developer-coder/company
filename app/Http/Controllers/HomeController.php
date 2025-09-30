<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Try to save to database (optional)
        try {
            ContactSubmission::create($validated);
        } catch (\Exception $e) {
            // Log the error but continue with email sending
            \Log::error('Failed to save contact submission to database: ' . $e->getMessage());
        }

        // Send email notification
        if (config('contact.send_notifications', true)) {
            try {
                $adminEmail = config('contact.admin_email', 'saadshivan62@gmail.com');
                Mail::to($adminEmail)
                    ->send(new ContactFormMail($validated));
            } catch (\Exception $e) {
                // Log the error but don't break the user experience
                \Log::error('Failed to send contact form email: ' . $e->getMessage());
            }
        }

        return redirect()->route('contact')->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');
    }
}
