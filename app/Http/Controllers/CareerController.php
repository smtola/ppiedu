<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Backend\Banner;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class CareerController extends Controller
{
    public function index(){
        $careers = Career::query()->get();
        $header = Banner::find(1); 
        if($header == null){
            return ('Error empty data!');
        }else{
            $url = $header->getFirstMediaUrl('images', 'large');
        }
        $careerMediaUrls = [];
        foreach ($careers as $career) {
            $mediaUrl = $career->getFirstMediaUrl('images', 'large');
            if (!empty($mediaUrl)) {
                $careerMediaUrls[] = $mediaUrl;
            }
        }
        return view('career',compact('careerMediaUrls','careers','url'));
    }

     public function apply(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'message' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ]);

        // Store the resume
        $resumePath = $request->file('resume')->store('resumes', 'public');
        $resumeFile = $request->file('resume');

        // Send Telegram notification with message
        $telegramMessage = "New Job Application!\n\n" .
                          "Name: {$validated['name']}\n" .
                          "Email: {$validated['email']}\n" .
                          "Phone: {$validated['phone']}\n" .
                          "Position: {$validated['position']}\n" .
                          "Message: {$validated['message']}";

        // First send the message
        Http::post('https://api.telegram.org/bot' . config('services.telegram.bot_token') . '/sendMessage', [
            'chat_id' => config('services.telegram.chat_id'),
            'text' => $telegramMessage
        ]);

        // Then send the resume file
        Http::attach('document', file_get_contents($resumeFile->getRealPath()), $resumeFile->getClientOriginalName())
            ->post('https://api.telegram.org/bot' . config('services.telegram.bot_token') . '/sendDocument', [
                'chat_id' => config('services.telegram.chat_id'),
                'caption' => "Resume from {$validated['name']}"
            ]);

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}
