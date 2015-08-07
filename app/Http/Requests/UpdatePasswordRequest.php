<?php

namespace Laracarte\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Laracarte\Http\Requests\Request;

class UpdatePasswordRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current_password' => 'required|min:6',
            'password' => 'required|min:6|confirmed'
        ];
    }
}
