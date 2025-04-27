<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required|email|unique:users,email'],
            'password' => ['required|confirmed' , Password::min(6)],
            'employer' => ['required'],
            'logo' => ['required' , File::types(['png' , 'jpg'])]
        ];
    }
    protected function failedValidation(ValidationValidator $validator)
    {
        throw new HttpResponseException(response()->json([
        'errors' => $validator->errors(),
        'status' => true
        ]));
    }

}
