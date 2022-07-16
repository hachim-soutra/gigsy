<?php

//(Here the App\Repositories is the folder name)

namespace App\Repositories;

use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OrderRepository implements OrderInterface
{
    public function all()
    {
        return Order::with(["buyer", "service"])->get();
    }

    public function paginate()
    {
        $page = request('page') ? request('page') : 1;
        $search = request('search') ? request('search') : '';
        $per_page = request('per_page') ? request('per_page') : 15;
        return Order::paginate($per_page, ['*'], 'page', $page);
    }

    public function get(Order $Order)
    {
        return $Order;
    }

    public function store(array $data)
    {

        $service = Service::findOrFail($data['service_id']);
        $data["amount"] = $service->price;
        $data["reference"] = "xx";
        $data["status"] = 0;
        $data["end_date"] = now()->addDays($service->livraison);
        $Order = Order::create($data);
        $Order->update([
            'reference' => 'order-' . $Order->id
        ]);
        return $Order;
    }

    public function update(Order $Order, array $data)
    {
        $Order->update($data);
        return $Order;
    }

    public function delete(Order $Order)
    {
        return $Order->delete();
    }
}
