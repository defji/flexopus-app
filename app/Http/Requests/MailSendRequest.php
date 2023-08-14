<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MailSendRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            "email"   => "required|email",
            "subject" => "required",
            "body"    => "required",
        ];
        if (auth()->user()->is_admin) {
            $rules['file'] = "file";
        }

        return $rules;
    }
}
