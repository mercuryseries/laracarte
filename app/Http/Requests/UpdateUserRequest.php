<?php

namespace Laracarte\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Laracarte\Http\Requests\Request;

class UpdateUserRequest extends Request
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
            'name'               => 'required|max:255',
            'address'            => 'required|min:8',
            'email'              => 'required|email|max:255|unique:users,email,'.$this->user()->id,
            'username'           => 'required|max:30|unique:users,username,'.$this->user()->id,
            'website'            => 'url',
            'github'             => 'url',
            'twitter'            => 'url',
            'avatar'             => 'image|max:4000',
            'bio'                => 'min:10',
            'laravel'            => 'integer|min:1|max:100',
            'frontend'           => 'integer|min:1|max:100',
            'backend'            => 'integer|min:1|max:100',
            'mobile'             => 'integer|min:1|max:100'
        ];
    }
}
