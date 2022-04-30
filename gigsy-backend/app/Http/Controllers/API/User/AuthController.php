<?php

namespace App\Http\Controllers\API\User;

use App\FailedLoginAttempt;
use App\Http\Requests\User\LoginRequest;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Mail\Optician\MMO6MotDePasseOublie;
use App\Models\Contact;
use App\Models\Notification;
use App\Models\Optician;
use App\Models\Seller;
use App\Models\User as ModelsUser;
use App\Rules\Recaptcha;
use App\Services\NotificationService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;


use function App\Helpers\compare_crypted_data;
use function App\Helpers\send_sms;

class AuthController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
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
        $response ['message'] = __('User successfully register.');
        return response($response, 200);
    }
}
