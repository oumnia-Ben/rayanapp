<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ReleveController extends Controller
{
    public function __construct()
    {
        View::share('menu', 'releve');
    }

    public function index($year = null)
    {
        $user = Auth::user();
        $credits = $user->credits()->get();
        $payments = $user->payments()->get();

        $transactions = $credits->merge($payments)->sortBy([['date', 'desc'],['id', 'asc']]);

        $transactions = $transactions->map(function ($item, $key) {
            if(get_class($item) == "App\Models\Credit")
                $item->type = "Credit";
            else
                $item->type = "payment";

            return $item;
        });

        return view('releve', compact('user', 'transactions'));
    }
}
