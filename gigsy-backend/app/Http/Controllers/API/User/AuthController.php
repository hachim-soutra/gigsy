<?php

namespace App\Http\Controllers\API\Optician;

use App\FailedLoginAttempt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Mail\Optician\MMO6MotDePasseOublie;
use App\Models\Contact;
use App\Models\Notification;
use App\Models\Optician;
use App\Rules\Recaptcha;
use App\Services\NotificationService;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use function App\Helpers\compare_crypted_data;
use function App\Helpers\send_sms;

class AuthController extends Controller
{
    public function login(Request $request)
    {
       $request->validate([
            'email'     =>  'required',
            'password'  =>  'required',
        ]);

        if(!auth()->attempt(array("email" => $request->email, 'password' => $request['password']))){
            return response(['message' => 'login ou mot de passe incorrect'], 404);
        }

        if (auth()->user()->userable_type != "App\Models\Contact")
            return response(['message' => 'Vous avez pas l\'autorisation !'], 401);

        $token = auth()->user()->createToken('authToken')->accessToken;


        return response(['msg' => 'sms-premiere-connexion'], 200);

    }

    public function forgetPassword(Request $request)
    {
    }
}
