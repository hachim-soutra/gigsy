<?php

namespace App\Http\Controllers\API\Shared;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "email" => "email|required"
        ]);
        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribePending($request->email);
            return response(['message' => 'Merci de vous abonner'], Response::HTTP_ACCEPTED);
        }
        return response(['message' => 'Pardon! Vous êtes déjà abonné'], Response::HTTP_NOT_FOUND);
    }
    public function storeContact(Request $request)
    {
        $request->validate([
            "name"      => "required|min:5",
            "email"     => "required|email|required",
            "objet"     => "required",
            "message"   => "required",
        ]);
        Mail::to("hachimsoutra10@gmail.com")
            ->send(new ContactMail($request->name, $request->email, $request->objet, $request->message));
        return response(['message' => 'Merci de vous message..'], Response::HTTP_ACCEPTED);
    }
}
