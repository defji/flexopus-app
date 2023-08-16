<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailSendRequest;
use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(MailSendRequest $request)
    {
        try {
            Mail::to($request->email)->send(new UserMail($request->subject, $request->body, $request->file));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([
                'mailSend' => $e->getMessage(),
            ]);
        }

    }
}
