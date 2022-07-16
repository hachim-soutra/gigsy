<?php

namespace App\Http\Controllers\API\Shared;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shared\OrderRequest;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{

    private $OrderRepository;

    public function __construct(OrderRepository $OrderRepository)
    {
        $this->OrderRepository = $OrderRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->OrderRepository->all();
        return $this->success(__('get Order by success'), $data, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $data = $this->OrderRepository->store($request->validated());
        return $this->success(__('store Order by success'), $data, Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function show(Order $Order)
    {
        $data = $this->OrderRepository->get($Order);
        return $this->success(__('show Order by success'), $data, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function update(OrderRequest $request, Order $Order)
    {
        $data = $this->OrderRepository->update($Order, $request->validated());
        return $this->success(__('Update Order by success'), $data, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $Order)
    {
        $data = $this->OrderRepository->delete($Order);
        return $this->success(__('Delete Order by success'), $data, Response::HTTP_OK);
    }
}
