<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Academy;
use App\Models\Sponsor;
use App\Models\Work;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CandidatePersonalController extends Controller
{
    public function index(Request $request)
    {
        $personal =  Personal::where('user_id', Auth::user()->id)->first();
        $sponsor =  Sponsor::where('user_id', Auth::user()->id)->first();
        $work =  Work::where('user_id', Auth::user()->id)->get();

        $Academy =  Academy::where('user_id', Auth::user()->id)->first();
        $qualification = DB::table('candidate_academics')
            ->join('qualifications', 'qualifications.candidate_academic_id', '=', 'candidate_academics.id')
            ->where('candidate_academics.user_id', Auth::user()->id)
            ->get();

            
           
        return view('register.candidate.candidate')->with('personal', $personal)
            ->with('Academy', $Academy)
            ->with('qualification', $qualification)
            ->with('sponsor', $sponsor)
            ->with('work', $work);
    }

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


                if ($request->img) {
                    $files = $request->img;
                    $nameimg =  $files->getClientOriginalName();

                    $destinationPath = public_path() . '/files';
                    $files->move($destinationPath, $nameimg);

                    User::where('id', Auth::user()->id)
                        ->update([
                            'img' => $nameimg
                        ]);
                }
                return response()->json(['success' => 'Record is successfully added']);
            }
        }
    }
}
