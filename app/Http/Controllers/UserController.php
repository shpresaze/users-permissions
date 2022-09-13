<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends Controller
{
    //
    public function index(): AnonymousResourceCollection
    {
        $users = User::all();

        return JsonResource::collection($users);
    }

    public function store(Request $request): JsonResource
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::query()->create($validated);
        return JsonResource::make($user);
    }

//    public function create(Request $request)
//    {
//        $user = new User;
//        $user->name = '';
//        $user->price = 40;
//
//        $user->save();
//
//        $permission = Permission::find([3, 4]);
//        $permission->categories()->attach($permission);
//
//        return 'Success';
//    }
}
