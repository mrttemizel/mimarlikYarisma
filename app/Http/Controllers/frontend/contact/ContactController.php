<?php

namespace App\Http\Controllers\frontend\contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TimeHunter\LaravelGoogleReCaptchaV2\Validations\GoogleReCaptchaV2ValidationRule;

class ContactController extends Controller
{
    public function send(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required',
            'g-recaptcha-response' => [new GoogleReCaptchaV2ValidationRule()]

        ]);

        Mail::to('rtc@antalya.edu.tr')->send(new ContactFormMail($validatedData));

        return back()->with('success', 'Message sent successfully!');

    }
}
