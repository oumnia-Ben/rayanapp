<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Validator;

class PaiementController extends Controller
{
    public function __construct()
    {
        View::share('menu', 'paiement');
    }

    public function index($year = null)
    {
        $user = Auth::user();

        $payments = $user->payments()->orderBy('date', 'desc')->get();
        return view('paiement', compact('user', 'payments'));
    }

    public function create()
    {
        $user = Auth::user();

        return view('add_paiement', compact('user'));
    }

    public function save(Request $request)
    {
        $inputs = $request->only('date', 'banque_id', 'amount', 'file');
        $validator = Validator::make($inputs, [
            'date' => 'required',
            'banque_id' => 'required',
            'amount' => 'required',
            'file' => 'max:5000',
        ]);

        if($validator->fails()){
            return redirect(route('addpaiement'))
                    ->withErrors($validator)
                    ->withInput();
        }



        $paiement = new Payment();
        $paiement->date = $inputs['date'];
        $paiement->amount = $inputs['amount'];
        $paiement->banque_id = $inputs['banque_id'];

        $paiement->user_id = Auth::user()->id;
        $paiement->is_confirmed = false;

        $paiement->save();

        $file = $request->file('file');
        if($file)
        {
            $destinationPath = 'uploads/justifs';
            $name = md5(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath,$name);
            $paiement->file = "justifs/".$name;
        }


        $paiement->save();

        return redirect(route('paiement'));
    }
}
