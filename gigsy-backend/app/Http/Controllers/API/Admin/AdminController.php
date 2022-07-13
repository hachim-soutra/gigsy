<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['data'] = $this->adminRepository->paginate();
        $response['message'] = __('Admins list');

        return response($response, Response::HTTP_OK);
    }

    public function list()
    {
        $response['data'] = $this->adminRepository->all();
        $response['message'] = __('Admins list');

        return response($response, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->adminRepository->register($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->adminRepository->findById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->adminRepository->updateById($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        return $this->adminRepository->deleteById($admin);
    }
}
