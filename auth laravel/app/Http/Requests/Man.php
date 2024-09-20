<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Man extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'fname'=>'required',
                'lname'=>'required',
                'email'=> 'required|max:100',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
                'gender'=>'required|in:m,f' 
        ];
    }
}