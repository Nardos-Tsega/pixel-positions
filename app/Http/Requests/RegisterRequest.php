<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'user_type' => 'required|in:student,expert,company,skill_seeker',
            // Student specific validations
            'first_name' => 'required_if:user_type,student',
            'last_name' => 'required_if:user_type,student',
            'institution' => 'required_if:user_type,student',
            'field_of_study' => 'required_if:user_type,student',
            'education_level' => 'required_if:user_type,student|in:high_school,bachelors,masters,phd,other',
        ];
    }
}
