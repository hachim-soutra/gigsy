<?php

namespace App\Repositories;

use App\Models\Seller;

interface SellerInterface
{
    public function all();

    public function get(Seller $id);

    public function store(array $data);

    public function update(Seller $id, array $data);

    public function delete(Seller $id);
}
