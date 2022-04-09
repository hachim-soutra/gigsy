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
        if(!auth()->attempt(array("email" => $request->email, 'password' => $request['password']))){
            return response(['message' => __('login ou mot de passe incorrect')], 404);
        }
        if (auth()->user()->userable_type != "App\Models\Contact")
            return response(['message' => __('Vous avez pas l\'autorisation !')], 401);
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        $response["access_token"] = $accessToken;
        $response["user"] = auth()->user();
        return response($response, 200);
    }

    public function register(RegisterRequest $request)
    {
        $this->userRepository->register($request);
        $response ['message'] = __('User successfully register.');
        return response($response, 200);
    }


//    public function forgetPassword(Request $request): JsonResponse
//    {
//    }
//
//    public function logout(Request $request): JsonResponse
//    {
//        $token = $request->user()->token();
//        $token->revoke();
//        $response = ['message' => __('You have been successfully logged out!')];
//        return response($response, 200);
//    }
}
