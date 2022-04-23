<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

/**
 * Class AddressRequest
 * @package App\Http\Requests
 */
class ContactUsRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'min:2'],
            'last_name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email'],
            'subject' => ['nullable', 'string', 'min:10'],
            'message' => ['required', 'string', 'min:20', 'max:255']

        ];
    }


}
