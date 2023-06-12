<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CotisationController extends Controller
{
    public function __construct()
    {
        View::share('menu', 'cotisation');
    }

    public function index($year = null)
    {
        $user = Auth::user();
        $credits = $user->credits()->orderBy('date', 'desc')->get();

        return view('cotisation', compact('user', 'credits'));
    }
}
