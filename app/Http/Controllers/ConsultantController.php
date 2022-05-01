<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Models\Team;

class ConsultantController extends Controller
{
    public function index()
    {
        return view('register.consultant');
    }

    public function business()
    {
        return view('register.business');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\InstitutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_name = $request->team_name;
        $team_area_expertise = $request->team_area_expertise;
        $team_experience_year = $request->team_experience_year;
        $team_designation = $request->team_designation;
        $team_number_success_cases = $request->team_number_success_cases;

        $count =  count($team_name);  

        if ($request->privacy_policy_document) {
            $files = $request->privacy_policy_document;
            $request->privacy_policy_document->getClientOriginalName();
            $name =  $request->privacy_policy_document->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $request['privacy_policy_document'] =  $name;
        }

        $Consultant =   Consultant::create($request->all());

        for ($i = 0; $i < $count; $i++) {
            if ($team_name[$i] != "") {
                $team = new Team;
                $team->provider_id =  $Consultant->id;
                $team->member =  $team_name[$i];
                $team->Designation =  $team_designation[$i];
                $team->expertise_area =  $team_area_expertise[$i];
                $team->experience_year =  $team_experience_year[$i];
                $team->no_success =  $team_number_success_cases[$i];
                $team->save();
            }
        }

        return redirect('/');
    }
}
