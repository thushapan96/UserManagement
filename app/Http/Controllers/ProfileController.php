<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Personal;
use App\Models\Academy;
use App\Models\Work;
use App\Models\Sponsor;
use App\Models\Qualification;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $personal =  Personal::where('user_id', $id)->first();
        $Academy =  Academy::where('user_id', $id)->first();
        $Sponsor =  Sponsor::where('user_id', $id)->first();
        $Work =  Work::where('user_id', $id)->get();
        $image = Auth::user()->img;
        $qualification = DB::table('candidate_academics')
            ->join('qualifications', 'qualifications.candidate_academic_id', '=', 'candidate_academics.id')
            ->where('candidate_academics.user_id', $id)
            ->get();

        return view('candidateProfile')
            ->with('personal', $personal)
            ->with('Academy', $Academy)
            ->with('Sponsor', $Sponsor)
            ->with('Work', $Work)
            ->with('image', $image)
            ->with('userId', $id)
            ->with('qualification', $qualification);
    }

    public function profileEdit($id)
    {
        $personal =  Personal::where('user_id', $id)->first();
        // $Academy =  Academy::where('user_id', $id)->first();
        // $Sponsor =  Sponsor::where('user_id', $id)->first();
        // $Work =  Work::where('user_id', $id)->get();

        // $qualification = DB::table('candidate_academics')
        //     ->join('qualifications', 'qualifications.candidate_academic_id', '=', 'candidate_academics.id')
        //     ->where('candidate_academics.user_id', $id)
        //     ->get();


        return view('personalEdit.personalEdit')
            ->with('personal', $personal);
        // ->with('Academy', $Academy)
        // ->with('Sponsor', $Sponsor)
        // ->with('Work', $Work)
        // ->with('qualification', $qualification);
    }

    public function academyEdit($id)
    {

        $Academy =  Academy::where('user_id', $id)->first();


        $qualification = DB::table('candidate_academics')
            ->join('qualifications', 'qualifications.candidate_academic_id', '=', 'candidate_academics.id')
            ->where('candidate_academics.user_id', $id)
            ->get();


        return view('personalEdit.academyEdit')
            ->with('Academy', $Academy)
            ->with('qualification', $qualification);
    }

    public function workEdit($id)
    {

        $work =  Work::where('user_id', $id)->get();


        return view('personalEdit.workEdit')
            ->with('work', $work)
            ->with('userId', Auth::user()->id);
    }

    public function sponsorEdit($id)
    {

        $sponsor =  Sponsor::where('user_id', $id)->first();


        return view('personalEdit.sponsorEdit')
            ->with('sponsor', $sponsor)
            ->with('userId', Auth::user()->id);
    }

    public function profileUpdate(Request $request, $id)
    {

        $validated = $request->validate([
            'first_name' => 'required',
            'email' => 'required',
        ]);

        $personal =  Personal::where('user_id', $id)->first();


        if ($request->same_Correspondence_address == '1') {

            $request['corosponding_street'] = $request->residential_street;
            $request['corosponding_street2'] = $request->residential_street2;
            $request['corosponding_city'] = $request->residential_city;
            $request['corosponding_region'] = $request->residential_region;
            $request['corosponding_pincode'] = $request->residential_pincode;
            $request['corosponding_country'] = $request->residential_country;
        }

        $personal->update($request->all());

        return redirect(route('personalProfile'))->with('personalUpdate', 'Saved !');
    }

    public function academyUpdate(Request $request, $id)
    {

        $academy =  Academy::where('user_id', $id)->first();

        $academy->user_id = $id;
        $academy->language_proficiency = $request->language_proficiency;
        $academy->language_level = $request->language_level;
        $academy->language_certified_by = $request->language_certified_by;
        $academy->applicant_test_name = $request->applicant_test_name[0] ?? $request->applicant_test_name[1];
        $academy->test_valid_upto = $request->test_valid_upto;

        if ($request->test_attachment) {
            $files = $request->test_attachment;
            $request->test_attachment->getClientOriginalName();
            $name =  $request->test_attachment->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $academy->test_attachment =  $name;
        }
        if ($request->language_attachment) {
            $files = $request->language_attachment;
            $request->language_attachment->getClientOriginalName();
            $name =  $request->language_attachment->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $academy->language_attachment = $name;
        }


        $academy->save();

        if ($request->type) {
            $count = count($request->type);

            $newcount = $count - 1;
            if ($request->attachment) {
                $newKeys_experience = array_fill_keys(range(0,   $newcount), "");
                $request->attachment += $newKeys_experience;
            }
            for ($i = 0; $i < $count; $i++) {

                if ($request->qualificationId[$i] != '') {

                    $qualificationId = $request->qualificationId[$i];
                    $qualification =  Qualification::find($qualificationId);
                    $qualification->candidate_academic_id = $academy->id;
                    $qualification->type = $request->type[$i];
                    $qualification->name = $request->name[$i];
                    $qualification->tech = $request->tech[$i];
                    $qualification->address = $request->address[$i];
                    $qualification->distant = $request->distant[$i];
                    $qualification->Year_completion = $request->year_completed[$i];
                    $qualification->applicable_eca_validity = $request->eca[$i];
                    $qualification->country = $request->country[$i];
                    if ($request->attachment) {

                        if ($request->attachment[$i]) {
                            $files = $request->attachment[$i];
                            $request->attachment[$i]->getClientOriginalName();
                            $name =  $request->attachment[$i]->getClientOriginalName();

                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $qualification->attachment = $name;
                        }
                    }
                    $qualification->save();
                } else {

                    $qualification = new Qualification;
                    $qualification->candidate_academic_id = $academy->id;
                    $qualification->type = $request->type[$i];
                    $qualification->name = $request->name[$i];
                    $qualification->tech = $request->tech[$i];
                    $qualification->address = $request->address[$i];
                    $qualification->distant = $request->distant[$i];
                    $qualification->Year_completion = $request->year_completed[$i];
                    $qualification->applicable_eca_validity = $request->eca[$i];
                    $qualification->country = $request->country[$i];
                    if ($request->attachment) {

                        if ($request->attachment[$i]) {
                            $files = $request->attachment[$i];
                            $request->attachment[$i]->getClientOriginalName();
                            $name =  $request->attachment[$i]->getClientOriginalName();

                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $qualification->attachment = $name;
                        }
                    }
                    $qualification->save();
                }
            }
        }


        return redirect(route('personalProfile'))->with('academyUpdate', 'Saved !');
    }

    public function workUpdate(Request $request, $id)
    {
        $id = Auth::user()->id;
        $count =  count($request->designation);
        $newcount = $count - 1;

        if ($request->attach_experience_certificate) {
            $newKeys_experience = array_fill_keys(range(0,   $newcount), "");
            $request->attach_experience_certificate += $newKeys_experience;
        }

        if ($request->attach_salary_slip) {
            $newKeys_salary = array_fill_keys(range(0, $newcount), "");
            $request->attach_salary_slip += $newKeys_salary;
        }

        if ($request->attach_offer_letter) {
            $newKeys_offer = array_fill_keys(range(0, $newcount), "");
            $request->attach_offer_letter += $newKeys_offer;
        }


        $dbid = Work::where('user_id', Auth::user()->id)->pluck('id');
        $bladeid = $request->workId;

        for ($i = 0; $i < $count; $i++) {
            if ($request->designation[$i] != "") {
                if ($request->workId[$i] != '') {
                    $userId = $request->workId[$i];
                    $Work =  Work::find($userId);
                    $Work->user_id = $id;
                    $Work->designation =  $request->designation[$i];
                    $Work->country =  $request->country[$i];
                    $Work->Year_completion =  $request->Year_completion[$i];

                    if ($request->attach_experience_certificate) {
                        if ($request->attach_experience_certificate[$i] != "") {
                            $files = $request->attach_experience_certificate[$i];
                            $name =   $files->getClientOriginalName();
                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $Work->attach_experience_certificate =  $name;
                        }
                    }
                    if ($request->attach_salary_slip) {
                        if ($request->attach_salary_slip[$i] != "") {

                            $files = $request->attach_salary_slip[$i];
                            $name =   $files->getClientOriginalName();

                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $Work->attach_salary_slip =  $name;
                        }
                    }
                    if ($request->attach_offer_letter) {
                        if ($request->attach_offer_letter[$i] != "") {
                            $files = $request->attach_offer_letter[$i];
                            $name =   $files->getClientOriginalName();

                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $Work->attach_offer_letter =  $name;
                        }
                    }

                    $Work->work_profile_letter =   $request->work_profile_letter[$i];
                    $Work->save();
                } else {
                    $Work = new Work;
                    $Work->user_id = $id;
                    $Work->designation =  $request->designation[$i];
                    $Work->country =  $request->country[$i];
                    $Work->Year_completion =  $request->Year_completion[$i];

                    if ($request->attach_experience_certificate) {
                        if ($request->attach_experience_certificate[$i] != "") {
                            $files = $request->attach_experience_certificate[$i];
                            $name =   $files->getClientOriginalName();
                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $Work->attach_experience_certificate =  $name;
                        }
                    }
                    if ($request->attach_salary_slip) {
                        if ($request->attach_salary_slip[$i] != "") {

                            $files = $request->attach_salary_slip[$i];
                            $name =   $files->getClientOriginalName();

                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $Work->attach_salary_slip =  $name;
                        }
                    }
                    if ($request->attach_offer_letter) {
                        if ($request->attach_offer_letter[$i] != "") {
                            $files = $request->attach_offer_letter[$i];
                            $name =   $files->getClientOriginalName();

                            $destinationPath = public_path() . '/files';
                            $files->move($destinationPath, $name);
                            $Work->attach_offer_letter =  $name;
                        }
                    }

                    $Work->work_profile_letter =   $request->work_profile_letter[$i];
                    $Work->save();
                }
            }
        }

        foreach ($dbid as $row) {
            if (in_array($row, $bladeid)) {
            } else {
                $team =  Work::find($row);
                $team->delete();
            }
        }

        return redirect(route('personalProfile'))->with('workUpdate', 'Saved !');
    }

    public function sponsorUpdate(Request $request, $id)
    {
        $sponsor = Sponsor::where('user_id', $id)->first();
        $sponsor->update($request->all());

        return redirect(route('personalProfile'))->with('sponsorUpdate', 'Saved !');
    }
    public function addImage(Request $request)
    {
        
        $files = $request->profile_img;
        $name =   $files->getClientOriginalName();

        $destinationPath = public_path() . '/files';
        $files->move($destinationPath, $name);


        User::where('id', Auth::user()->id)
            ->update([
                'img' => $name,
            ]);

            return $name;

    }
}
