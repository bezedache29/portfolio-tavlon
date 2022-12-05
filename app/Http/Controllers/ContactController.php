<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'object' => 'required|string|min:5|max:255',
                'message' => 'required|string|min:5|max:500',
            ],
            [
                'email.required' => 'L\'email est obligatoire',
                'email.email' => 'L\'email doit être un email valide',
                'object.required' => 'L\'objet du message est obligatoire',
                'object.min' => 'L\'objet du message doit faire :min caratères minimum',
                'object.max' => 'L\'objet du message doit faire :max caratères maximum',
                'object.string' => 'L\'objet du message doit être une chaine de caractères',
                'message.required' => 'Le message est obligatoire',
                'message.min' => 'Le message doit faire :min caratères minimum',
                'message.max' => 'Le message doit faire :max caratères maximum',
                'message.string' => 'Le message doit être une chaine de caractères',
            ]
        );

        if ($validator->fails()) {
            return redirect(url()->previous() . '#contact')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::create($request->all());

        $user = User::where('email', 'exodeeffects@gmail.com')->first();

        $user->notify(new ContactNotification($request->all()));

        return redirect()->route('home')->with('success', 'Votre message a bien été envoyé');
    }
}
