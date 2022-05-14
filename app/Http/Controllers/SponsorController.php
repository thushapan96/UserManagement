<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Auth;

class SponsorController extends Controller
{
    public function store(Request $request)
    {
        Sponsor::create($request->all()+ ['user_id' => Auth::user()->id]);

        return redirect('/profile')->with('message', 'Successfully  Submitted !');
    }
}
