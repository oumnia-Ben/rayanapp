<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ExpenseController extends Controller
{
  
  public function __construct()
  {
      View::share('menu', 'expense');
  }


  public function index()
  {
    $user = Auth::user();
    $expenses = expense::orderBy('id')->get();

    return view('expense', compact('user','expenses'));
  }
}