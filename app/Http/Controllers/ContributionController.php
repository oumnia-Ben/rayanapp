<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ContributionController extends Controller
{
    public function __construct()
    {
        View::share('menu', 'contribution');
    }

    public function index($year = null)
    {
        $user = Auth::user();
        $contributions = Contribution::all();

        return view('contribution', compact('user', 'contributions'));
    }

    public function vote($contribution_id, $vote)
    {
        $contribution = Contribution::find($contribution_id);
        if(!$contribution->approval)
            $approval = [];
        else
            $approval = json_decode($contribution->approval, true);

        $user = Auth::user();
        if(!array_key_exists($user->id, $approval))
        {
            $approval[$user->id] = $vote;
        }

        $contribution->approval = json_encode($approval);
        $contribution->save();

        return redirect()->back();
    }
}
