<?php

//(Here the App\Repositories is the folder name)

namespace App\Repositories;

use App\Models\Buyer;
use Illuminate\Http\Request;

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
        return Buyer::where('name', 'LIKE', "%$search%")
            ->paginate($per_page, ['*'], 'page', $page);
    }

    public function get(Buyer $buyer)
    {
        return $buyer;
    }

    public function store(array $data)
    {
        return Buyer::create($data);
    }

    public function update(Buyer $buyer, array $data)
    {
        return $buyer->update($data);
    }

    public function delete(Buyer $buyer)
    {
        return $buyer->delete();
    }
}
