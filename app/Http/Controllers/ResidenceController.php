<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ResidenceController extends Controller
{
    public function __construct()
    {
        View::share('menu', 'residence');
    }

    public function index()
    {
        $users = User::orderBy('apartment')->get();
        $stages = User::select(\DB::RAW('DISTINCT(stage)'))->orderBY('stage', 'asc')->get()->pluck('stage');

        return view('residence', compact('users', 'stages'));
    }
}
