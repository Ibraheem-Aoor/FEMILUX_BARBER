<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class BaseUserRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}
