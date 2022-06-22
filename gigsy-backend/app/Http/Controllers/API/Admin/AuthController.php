<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\LoginRequest;
use App\Repositories\AdminRepository;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    private $userRepository;

    public function __construct(AdminRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(LoginRequest $request)
    {
        return  $this->userRepository->login($request);
    }

    public function register(RegisterRequest $request)
    {
        $this->userRepository->register($request);
        $response['message'] = __('User successfully register.');
        return response($response, 200);
    }
}
