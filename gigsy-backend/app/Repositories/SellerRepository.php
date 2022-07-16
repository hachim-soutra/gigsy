<?php

//(Here the App\Repositories is the folder name)

namespace App\Repositories;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SellerRepository implements SellerInterface
{
    public function all()
    {
        return Seller::get();
    }

    public function paginate()
    {
        $page = request('page') ? request('page') : 1;
        $search = request('search') ? request('search') : '';
        $per_page = request('per_page') ? request('per_page') : 15;
        return Seller::paginate($per_page, ['*'], 'page', $page);
    }

    public function get(Seller $Seller)
    {
        return $Seller;
    }

    public function store(array $data)
    {
        $Seller = Seller::create([]);
        $data['userable_id'] = $Seller->id;
        $data['userable_type'] = Seller::class;
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $user->userable()->associate($Seller);
        return $Seller;
    }

    public function update(User $user, array $data)
    {
        $user->userable->update([]);
        $user->update($data);
        return $user->userable;
    }

    public function delete(Seller $Seller)
    {
        return $Seller->delete();
    }
}
