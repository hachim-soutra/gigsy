<?php

namespace App\Repositories;

use App\Builders\SellerBuilder;
use App\Interfaces\UserRepositoryInterface;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function login($request)
    {
//        return Order::all();
    }

    public function register($request)
    {
        $seller = Seller::create([]);
        $request['userable_id'] = $seller->id;
        $request['userable_type'] = Seller::class;
        $this->user = User::create($request->all());
        $this->user->userable()->associate($seller);
    }


}
