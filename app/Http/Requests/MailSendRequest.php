<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            "file"    => [
                Rule::prohibitedIf(!request()->user()->is_admin),
                Rule::excludeIf(!request()->user()->is_admin),
            ],

        ];
        return $rules;
    }
}
