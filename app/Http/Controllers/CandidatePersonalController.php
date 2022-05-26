<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatePersonalController extends Controller
{
    function store(Request $request)
    {
        $id = Auth::user()->id;
        $checkPersonal  =  Personal::where('user_id', '=', $id)->exists();
        if (!$checkPersonal) {
            $validator = \Validator::make($request->all(), [
                'first_name' => 'required',
                'email' => 'required|unique:candidate_personals',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {
                if ($request->same_Correspondence_address == '1') {

                    $request['corosponding_street'] = $request->residential_street;
                    $request['corosponding_street2'] = $request->residential_street2;
                    $request['corosponding_city'] = $request->residential_city;
                    $request['corosponding_region'] = $request->residential_region;
                    $request['corosponding_pincode'] = $request->residential_pincode;
                    $request['corosponding_country'] = $request->residential_country;
                }
                $data = Personal::create($request->all() + ['user_id' =>    $id]);
                return response()->json(['success' => 'Record is successfully added']);
            }
        }
    }
}
