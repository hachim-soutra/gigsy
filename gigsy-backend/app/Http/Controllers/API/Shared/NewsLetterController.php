<?php

namespace App\Http\Controllers\API\Shared;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
}
