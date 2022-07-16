<?php

namespace App\Repositories;

use App\Models\Order;

interface OrderInterface
{
    public function all();

    public function paginate();

    public function get(Order $Order);

    public function store(array $data);

    public function update(Order $id, array $data);

    public function delete(Order $id);
}
