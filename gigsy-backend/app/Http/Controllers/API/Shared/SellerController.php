<?php

namespace App\Http\Controllers\API\Shared;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shared\SellerRequest;
use App\Models\Seller;
use App\Repositories\SellerRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SellerController extends Controller
{

    private $SellerRepository;

    public function __construct(SellerRepository $SellerRepository)
    {
        $this->SellerRepository = $SellerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->SellerRepository->paginate();
        return $this->success(__('get Seller by success'), $data, Response::HTTP_OK);
    }

    public function list()
    {
        $data = $this->SellerRepository->all();
        return $this->success(__('get Seller by success'), $data, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellerRequest $request)
    {
        $data = $this->SellerRepository->store($request->validated());
        return $this->success(__('store Seller by success'), $data, Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $Seller)
    {
        $data = $this->SellerRepository->get($Seller);
        return $this->success(__('show Seller by success'), $data, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function update(SellerRequest $request, Seller $Seller)
    {
        $data = $this->SellerRepository->update($Seller, $request->validated());
        return $this->success(__('Update Seller by success'), $data, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $Seller)
    {
        $data = $this->SellerRepository->delete($Seller);
        return $this->success(__('Delete Seller by success'), $data, Response::HTTP_OK);
    }
}
