<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements UserRepositoryInterface
{
    public function login($request): Response
    {
        if (!auth()->attempt(array("email" => $request->email, 'password' => $request['password']))) {
            return response(['message' => __('login ou mot de passe incorrect')], 404);
        }

        if (auth()->user()->userable_type != Admin::class)
            return response(['message' => __('Vous avez pas l\'autorisation !')], 401);

        $response["access_token"]   = auth()->user()->createToken('authToken')->accessToken;
        $response["user"]           = auth()->user();
        $response["admin"]          = auth()->user()->userable;
        $response["message"]        = __("user login successful");

        return response($response, Response::HTTP_OK);
    }

    public function register(HttpRequest $request): Response
    {
        $admin                      = Admin::create([]);
        $request['userable_id']     = $admin->id;
        $request['userable_type']   = Admin::class;
        $request['password']        = Hash::make($request->password);

        $user                       = User::create($request->all());
        $user->userable()->associate($admin);

        $response["message"] = __("Admins list");
        $response["data"] = $admin;
        return response($response, Response::HTTP_CREATED);
    }

    public function all()
    {
        return Admin::get();
    }

    public function findById(int $id): Response
    {
        $admin = Admin::findOrFail($id);
        $response["data"] = $admin;
        $response["message"] = __("Admin retrieved with success");
        return response($response, Response::HTTP_OK);
    }

    public function deleteById(int $id): Response
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        $response["message"] = __("Admin deleted with success");
        return response($response, Response::HTTP_OK);
    }

    public function updateById(int $id, $request): Response
    {
        $admin = Admin::findOrFail($id);
        $admin->update($request);
        $response["data"] = $admin;
        $response["message"] = __("Admin updated with success");
        return response($response, Response::HTTP_OK);
    }
}
