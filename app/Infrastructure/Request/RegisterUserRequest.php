<?php
namespace App\Infrastructure\Request;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'in:admin,user',
        ];
    }
}
