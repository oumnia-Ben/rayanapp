<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function __construct()
    {
        View::share('menu', 'dashboard');
    }

    public function index()
    {
        $user = Auth::user();
        $date = Carbon::now()->subMonths(3)->format('Y-m-d');

        $credits = $user->credits()->where('date', '>=', $date)->get();
        $payments = $user->payments()->where('date', '>=', $date)->get();

        $transactions = $credits->merge($payments)->sortBy([['date', 'desc'],['id', 'asc']]);

        $transactions = $transactions->map(function ($item, $key) {
            if(get_class($item) == "App\Models\Credit")
                $item->type = "Credit";
            else
                $item->type = "payment";

            return $item;
        });

        return view('dashboard', compact('user', 'transactions'));
    }
}
