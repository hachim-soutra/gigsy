<?php

//(Here the App\Repositories is the folder name)

namespace App\Repositories;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BuyerRepository implements BuyerInterface
{
    public function all()
    {
        return Buyer::get();
    }

    public function paginate()
    {
        $page = request('page') ? request('page') : 1;
        $search = request('search') ? request('search') : '';
        $per_page = request('per_page') ? request('per_page') : 15;
        return Buyer::paginate($per_page, ['*'], 'page', $page);
    }

    public function get(Buyer $buyer)
    {
        return $buyer;
    }

    public function store(array $data)
    {
        $buyer = Buyer::create([
            'status' => 0
        ]);
        $data['userable_id'] = $buyer->id;
        $data['userable_type'] = Buyer::class;
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $user->userable()->associate($buyer);
        return $buyer;
    }

    public function update(Buyer $buyer, array $data)
    {
        $buyer->update([
            'status' => $data['status'] ?? $buyer->status
        ]);
        $buyer->user->update($data);
        return $buyer;
    }

    public function delete(Buyer $buyer)
    {
        return $buyer->delete();
    }
}
