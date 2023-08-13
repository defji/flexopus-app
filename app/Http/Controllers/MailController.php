<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailSendRequest;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(MailSendRequest $request)
    {
        dd($request->all());
    }
}
