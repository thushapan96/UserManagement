<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorController extends Controller
{
    public function store(Request $request)
    {
        Sponsor::create($request->all());

        return redirect('/');
    }
}
