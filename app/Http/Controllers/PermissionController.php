<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionController extends Controller
{
    //
    public function index(): AnonymousResourceCollection
    {
        $permissions = Permission::all();

        return JsonResource::collection($permissions);
    }
//
    public function store(Request $request): JsonResource
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $permission = Permission::query()->create($validated);
        return JsonResource::make($permission);
    }

    public function getAllPermissions(): JsonResponse
    {
        $permissions = Permission::all();
        return response()->json($permissions);
    }
    //
}
