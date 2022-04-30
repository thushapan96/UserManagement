<?php

namespace App\Http\Controllers;
use App\Models\Personal;
use Illuminate\Http\Request;

class CandidatePersonalController extends Controller
{
    function store(Request $request){
if($request->same_Correspondence_address == '1'){
    $request['corosponding_street'] = $request->residential_street;
    $request['corosponding_street2'] = $request->residential_street2;
    $request['corosponding_city'] = $request->residential_city;
    $request['corosponding_region'] = $request->residential_region;
    $request['corosponding_pincode'] = $request->residential_pincode;
    $request['corosponding_country'] = $request->residential_country;
}
        $data = Personal::create($request->all());
return "success";
    }
}
