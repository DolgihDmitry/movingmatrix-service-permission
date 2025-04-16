<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPermissionCheckRequest;
use App\Models\User;

class UserPermissionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function check(UserPermissionCheckRequest $request)
    {
        $user = User::findOrFail($request->input($request->userId));

        $allowed = $user->can($request->input('permission'));

        return $allowed ? $this->success(null, 'Access allowed') : $this->error(null, 'Access denied');
    }
}
