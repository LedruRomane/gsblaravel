<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.contact');
    }

    public function submit(ContactRequest $request)
    {
        Notification::route('mail', env('MAIL_CONTACT'))
            ->notify(new ContactNotification($request->all()));

        return redirect()->back()->with([
            'success' => 'Email envoyé! Nous vous répondrons dans les plus brefs délais.'
        ]);
    }
}
