<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'last_name'             => 'required|max:20|regex:/^[a-zA-Z]+$/u|uppercase|regex:/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/',
            'name'                  => 'required|max:20|regex:/^[a-zA-Z]+$/u|uppercase|regex:/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/',
            'other_name'            => 'required|max:50|uppercase|regex:/(^[A-Za-z0-9 ]+$)+/',
            'country'               => 'required',
            'identification_type'   => 'required',
            'identification'        => [
                'required',
                'regex:/^[\w-]*$/',
                'max:20',
                Rule::unique('employees')->ignore($this->route('employee'))
            ],
            'email'                 =>
            [
                'required',
                'max:300',
                Rule::unique('employees')->ignore($this->route('employee'))
            ],
        ];
    }
}
