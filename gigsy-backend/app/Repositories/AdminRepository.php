<?php

namespace App\Repositories;

use App\Builders\SellerBuilder;
use App\Interfaces\UserRepositoryInterface;
use App\Models\Admin;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements UserRepositoryInterface
{
    public function login($request): jso
    {
        if (!auth()->attempt(array("email" => $request->email, 'password' => $request['password']))) {
            return response(['message' => __('login ou mot de passe incorrect')], 404);
        }

        if (auth()->user()->userable_type != Admin::class)
            return response(['message' => __('Vous avez pas l\'autorisation !')], 401);

        $response["access_token"]   =  auth()->user()->createToken('authToken')->accessToken;
        $response["user"]           = auth()->user();
        $response["message"]        = __("user login successful");
        return response($response, 200);
    }

    public function register($request)
    {
        $admin = Admin::create([]);
        $request['userable_id']     = $admin->id;
        $request['userable_type']   = Admin::class;
        $request['password']        = Hash::make($request->password);
        $this->user                 = User::create($request->all());
        $this->user->userable()->associate($admin);
    }


}
