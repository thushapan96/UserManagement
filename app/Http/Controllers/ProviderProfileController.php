<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Institution;
use App\Models\Consultant;
use App\Models\Team;

class ProviderProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $institutions =  Institution::where('user_id', $id)->first();

        if ($institutions) {
            return view('providerProfile.institudeProfile')->with('institutions', $institutions);
        } else {
            return redirect(route('register.institude'));
        }
    }

    public function consultantIndex()
    {
        $id = Auth::user()->id;
        $consultants =  Consultant::where('user_id', $id)->first();


        $teams = Team::where('provider_id', $consultants->id)->get();

        if ($consultants) {
            return view('providerProfile.consultantProfile')->with('consultants', $consultants)->with('teams', $teams);
        } else {
            return redirect(route('register.consultant'));
        }
    }

    public function businessIndex()
    {
        $id = Auth::user()->id;
        $consultants =  Consultant::where('user_id', $id)->first();

        $teams = Team::where('provider_id', $consultants->id)->get();


        if ($consultants) {
            return view('providerProfile.business')->with('consultants', $consultants)->with('teams', $teams);
        } else {
            return redirect(route('register.business'));
        }
    }


    public function editInstitude()
    {
        $institutions =  Institution::where('user_id', Auth::user()->id)->first();
        return view('providerEdit.institude')->with('institutions', $institutions);
    }

    public function updateInstitude(Request $request, $id)
    {
        $Institution = Institution::find($id);
        $Institution->update($request->all());
        $Institution->user_id = Auth::user()->id;
        if ($request->privacy_policy_document) {
            $files = $request->privacy_policy_document;
            $nameprivacy_policy_document = $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameprivacy_policy_document);
            $Institution->privacy_policy_document = $nameprivacy_policy_document;
        }
        if ($request->Award) {
            $files = $request->Award;
            $nameAward =  $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameAward);
            $Institution->Award = $nameAward;
        }

        $Institution->save();
        return redirect(route('institudeProfile'))->with('editformSuccess', 'Saved!');
    }

    public function editConsultant()
    {
        $consultants =  Consultant::where('user_id', Auth::user()->id)->first();

        $teams = Team::where('provider_id', $consultants->id)->get();
        return view('providerEdit.consultant')
            ->with('consultants', $consultants)
            ->with('teams', $teams);
    }

    public function updateConsultant(Request $request, $id)
    {
        $team_name = $request->team_name;
        $team_area_expertise = $request->team_area_expertise;
        $team_experience_year = $request->team_experience_year;
        $team_designation = $request->team_designation;
        $team_number_success_cases = $request->team_number_success_cases;


        $Consultant = Consultant::find($id);
        $dbid = Team::where('provider_id', $Consultant->id)->pluck('id');
        $bladeid = $request->teamId;

        $Consultant->update($request->all());

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
                    if ($request->teamId[$i] != '') {
                        $team =  Team::find($request->teamId[$i]);
                        // $deleteTeam = Team::where('provider_id',$Consultant->id)
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
                    } else {
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


            foreach ($dbid as $row) {
                if (in_array($row, $bladeid)) {
                } else {
                    $team =  Team::find($row);
                    $team->delete();
                }
            }
        }

        if ($Consultant->type == 'Chartered Accountant') {
            return redirect(route('businessProfile'))->with('editformSuccess', 'Saved!');
        } else {
            return redirect(route('consultantProfile'))->with('editformSuccess', 'Saved!');
        }
    }

    public function editBusiness()
    {
        $consultants =  Consultant::where('user_id', Auth::user()->id)->first();


        $teams = Team::where('provider_id', $consultants->id)->get();
        return view('providerEdit.business')
            ->with('consultants', $consultants)
            ->with('teams', $teams);
    }
}
