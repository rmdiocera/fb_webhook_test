<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class FacebookPageWebhookController extends Controller
{
    public function __construct() {
        $this->token = env('PAGE_VERIFY_TOKEN');
    }

    public function index() {
        return view('index');
    }

    public function verifyToken(Request $request)
    {
        Log::info('Incoming verification token: ' . $request->get('hub.verify_token') ); // I added this line
        // if ($request->get('hub_mode') === 'subscribe' && $request->get('hub_verify_token') === $this->config->get('verification')) {
        //     return response($request->get('hub_challenge'))->send();
        // }
    }
    // public function verifyToken(Request $request) {
    //     $mode  = $request->get('hub_mode');
    //     $token = $request->get('hub_verify_token');

    //     if ($mode === "subscribe" && $this->token && $token === $this->token) {
    //         return response($request->get('hub_challenge'), 200);
    //     }

    //     return response("Invalid token!", 400);
    // }
}
