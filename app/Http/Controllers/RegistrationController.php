<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Faculty;
use App\Models\ClassFaculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegistrationController extends Controller
{
    public function create()
    {
        $faculties = Faculty::all();
        $classes = ClassFaculty::all();
        return view('registrations.create', compact('faculties', 'classes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'faculty' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'notes' => 'nullable|string'
        ]);

        Registration::create($validated);

        // Send Telegram notification
        $telegramMessage = "New Registration!\n\n" .
                          "Name: {$validated['name']}\n" .
                          "Email: {$validated['email']}\n" .
                          "Phone: {$validated['phone_number']}\n" .
                          "Address: {$validated['address']}\n" .
                          "Faculty: {$validated['faculty']}\n" .
                          "Class: {$validated['class']}\n" .
                          "Notes: " . ($validated['notes'] ?? 'N/A');

        Http::post('https://api.telegram.org/bot' . config('services.telegram.bot_token') . '/sendMessage', [
            'chat_id' => config('services.telegram.chat_id'),
            'text' => $telegramMessage
        ]);

        return redirect()->route('registration.success')
            ->with('success', 'Registration submitted successfully!');
    }

    public function success()
    {
        return view('registrations.success');
    }
} 