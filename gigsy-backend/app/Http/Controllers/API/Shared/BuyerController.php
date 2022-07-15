<?php

namespace App\Http\Controllers\API\Shared;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shared\BuyerRequest;
use App\Models\Buyer;
use App\Repositories\BuyerRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BuyerController extends Controller
{

    private $buyerRepository;

    public function __construct(BuyerRepository $buyerRepository)
    {
        $this->buyerRepository = $buyerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->buyerRepository->paginate();
        return $this->success(__('get buyer by success'), $data, Response::HTTP_OK);
    }

    public function list()
    {
        $data = $this->buyerRepository->all();
        return $this->success(__('get buyer by success'), $data, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuyerRequest $request)
    {
        $data = $this->buyerRepository->store($request->validated());
        return $this->success(__('store buyer by success'), $data, Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        $data = $this->buyerRepository->get($buyer);
        return $this->success(__('show buyer by success'), $data, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function update(BuyerRequest $request, Buyer $buyer)
    {
        $data = $this->buyerRepository->update($buyer, $request->validated());
        return $this->success(__('Update buyer by success'), $data, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        $data = $this->buyerRepository->delete($buyer);
        return $this->success(__('Delete buyer by success'), $data, Response::HTTP_OK);
    }
}
