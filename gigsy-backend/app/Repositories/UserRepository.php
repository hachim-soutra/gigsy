<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function login($request)
    {
        if (!auth()->attempt(['email' => $request->email, 'password' => $request['password']])) {
            return response(['message' => __('login ou mot de passe incorrect')], 404);
        }
        if (auth()->user()->userable_type != Seller::class) {
            return response(['message' => __('Vous avez pas l\'autorisation !')], 401);
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        $response['access_token'] = $accessToken;
        $response['user'] = auth()->user()->userable()->with("services")->first();
        $response['message'] = __('user login successful');

        return response($response, 200);
    }

    public function register($request)
    {
        $seller = Seller::create([]);
        $request['userable_id'] = $seller->id;
        $request['userable_type'] = Seller::class;
        $request['password'] = Hash::make($request['password']);
        $file = $request['img'];
        $filename = str_replace(" ", "_", date('YmdHi') . $file->getClientOriginalName());
        $file->move(public_path('images/users'), $filename);
        $request['img'] = url("/images/users/$filename");

        $this->user = User::create($request);
        $this->user->userable()->associate($seller);
    }
}
