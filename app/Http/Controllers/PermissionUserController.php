<?php

namespace App\Http\Controllers;

use App\Models\PermissionUser;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionUserController extends Controller
{
    //
    public function store(Request $request): JsonResource
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'permission_id' => 'required',
        ]);

        $permissionUser = PermissionUser::query()->create($validated);
        return JsonResource::make($permissionUser);
    }
}
