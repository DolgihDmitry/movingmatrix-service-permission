<?php

namespace App\Http\Requests;

class UserPermissionCheckRequest extends MainRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'userId' => 'required|exists:login_user,id',
            'permission' => 'required|string',
        ];
    }
}
