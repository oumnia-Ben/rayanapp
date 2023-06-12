<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reunion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ReunionController extends Controller
{

  public function __construct()
    {
        View::share('menu', 'reunion');
    }


    public function index()
    {
      $user = Auth::user();
      $reunions = reunion::orderBy('id')->get();

      return view('reunion', compact('user','reunions'));
    }


}
