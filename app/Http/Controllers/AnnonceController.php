<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AnnonceController extends Controller
{
  public function __construct()
  {
      View::share('menu', 'annonce');
  }


  public function index()
  {
    $user = Auth::user();
    $annonces = annonce::orderBy('id')->get();

    return view('annonce', compact('user','annonces'));
  }
}
