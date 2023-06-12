<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ValidationController extends Controller
{
    public function __construct()
    {
        View::share('menu', 'validation');
    }

    public function index($year = null)
    {
        $user = Auth::user();
        return view('validation', compact('user'));
    }

    public function save(Request $request)
    {
        $is_valide = (request("validate") === "true");
        $payment_id = request('payment');

        $payment = Payment::find($payment_id);
        if($payment)
        {
            if(!$is_valide)
            {
                $payment->delete();
            }
            else
            {
                $payment->is_confirmed = true;
                $payment->save();
            }
        }
        return redirect(route('validation'));
    }
}
