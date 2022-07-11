<?php

namespace App\Interfaces;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function login(LoginRequest $request);

    public function register(RegisterRequest $request);
//    public function forget(Request $request);
}
