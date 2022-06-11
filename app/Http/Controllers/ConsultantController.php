<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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


        $Consultant =   Consultant::create($request->all());
        $Consultant->user_id = Auth::user()->id;

        if ($request->Award) {
            $files = $request->Award;
            $nameAward =  $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameAward);
            $Consultant->Award = $nameAward;
        }
        if ($request->privacy_policy_document) {
            $files = $request->privacy_policy_document;
            $nameprivacy_policy_document = $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameprivacy_policy_document);
            $Consultant->privacy_policy_document = $nameprivacy_policy_document;
        }
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
        if($request->hasFile('mutiImg_about_company'))
        {
            $names = [];
            foreach($request->file('mutiImg_about_company') as $image)
            {
                $destinationPath = public_path() . '/files';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);          
        
            }
            $Consultant->mutiImg_about_company = $names;
        }
        if($request->hasFile('mutiImg_about_award'))
        {
            $names = [];
            foreach($request->file('mutiImg_about_award') as $image)
            {
                $destinationPath = public_path() . '/files';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);          
        
            }
            $Consultant->mutiImg_about_award = $names;
        }

        $Consultant->save();

        if ($team_name) {
            $count =  count($team_name);
            $newcount =  $count - 1;
        }
        if ($request->team_img) {

            $newKeys_offer = array_fill_keys(range(0, $newcount), "");
            $request->team_img += $newKeys_offer;
        }

        if ($team_name) {
            for ($i = 0; $i < $count; $i++) {
                if ($team_name[$i] != "") {
                    $team = new Team;
                    $team->provider_id = $Consultant->id;
                    $team->member =  $team_name[$i];
                    if ($request->team_img) {
                        if ($request->team_img[$i] != '') {

                            $files = $request->team_img[$i];
                            $files->getClientOriginalName();
                            $name =  $files->getClientOriginalName();

                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $team->team_img = $name;
                        }
                    }
                    $team->Designation =  $team_designation[$i];
                    $team->expertise_area =  $team_area_expertise[$i];
                    $team->experience_year =  $team_experience_year[$i];
                    $team->no_success =  $team_number_success_cases[$i];

                    $team->save();
                }
            }
        }


        if ($Consultant->type == 'Chartered Accountant') {
            return redirect(route('businessProfile'))->with('formSuccess', 'Saved!');
        } else {
            return redirect(route('consultantProfile'))->with('formSuccess', 'Saved!');
        }
    }
}
