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
        Mail::to($request->email)->send(new UserMail($request->subject, $request->body));
    }
}
