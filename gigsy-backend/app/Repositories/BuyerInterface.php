<?php

namespace App\Repositories;

use App\Models\Buyer;

interface BuyerInterface
{
    public function all();

    public function paginate();

    public function get(Buyer $buyer);

    public function store(array $data);

    public function update(Buyer $id, array $data);

    public function delete(Buyer $id);
}
