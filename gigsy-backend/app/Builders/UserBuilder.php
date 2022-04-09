<?php

namespace App\Builders;

use App\Models\Seller;
use App\Models\User;

class SellerBuilder
{
    private $seller;

    public function __construct()
    {
        $this->seller = Seller::create([]);
    }

    public function addUser($request)
    {
        $request['userable_id'] = $this->seller->id;
        $request['userable_type'] = Seller::class;
        $this->user = User::create($request->all());
        $this->user->userable()->associate($this->seller);
        return $this;
    }


}
