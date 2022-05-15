<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Auth;

class SponsorController extends Controller
{
    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'sponsor_email' => 'required|unique:candidate_sponsors',
            'guardian_email' => 'required|unique:candidate_sponsors',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Sponsor::create($request->all() + ['user_id' => Auth::user()->id]);
            return response()->json(['success' => 'Record is successfully added']);
        }
    }
}
