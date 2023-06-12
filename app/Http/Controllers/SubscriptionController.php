<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function register(Request $request)
    {
        $user = auth()->user();

        $user->updatePushSubscription(
            $request->get('endpoint'),
            $request->get('keys')['p256dh'],
            $request->get('keys')['auth']
        );
    }
}
