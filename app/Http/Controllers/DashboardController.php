<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Institution;
use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function institudeIndex()
    {

        $institutions = Institution::all();

        return view('dashboard.institution')->with('institutions', $institutions)->with('unique', '');
    }
    public function consultantIndex()
    {

        $consultants = Consultant::where('type', 'RCIC Consultant')->orwhere('type', 'Immigration Lawyer/Attorney')->get();

        return view('dashboard.consultant')->with('consultants', $consultants)->with('unique', '');
    }
    public function businessIndex()
    {

        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'Chartered Accountant')->select('providers.*', 'users.img as img')->get();
        $type = "Chartered Accountant";
        return view('dashboard.business')->with('consultants', $consultants)->with('type', $type)->with('unique', '');
    }
    public function consultantView($id)
    {

        $consultants = Consultant::find($id);

        $user_id =  $consultants->user_id;
        $img = User::where('id', $user_id)->value('img');

        $teams = Team::where('provider_id', $consultants->id)->get();

        return view('providerProfile.consultantProfile')->with('consultants', $consultants)->with('teams', $teams)->with('view', 'view')->with('img', $img);
    }
    public function businessView($id)
    {

        $consultants = Consultant::find($id);
        $teams = Team::where('provider_id', $consultants->id)->get();
        $user_id =  $consultants->user_id;
        $img = User::where('id', $user_id)->value('img');

        return view('providerProfile.business')->with('consultants', $consultants)->with('teams', $teams)->with('view', 'view')->with('img', $img);
    }
    public function institutionView($id)
    {

        $institutions =  Institution::find($id);
        $user_id =  $institutions->user_id;
        $img = User::where('id', $user_id)->value('img');

        return view('providerProfile.institudeProfile')->with('institutions', $institutions)->with('view', 'view')->with('img', $img);
    }
    public function schoolIndex(Request $request)
    {

        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'School')->select('institutions.*', 'users.img as img');
        if ($request->financial != '') {
            $institutions = $institutions->where('is_financial', $request->financial);
        }
        if ($request->medium != '') {
            $institutions = $institutions->where('medium', $request->medium);
        }
        $institutions = $institutions->get();
        $type = "School";
        return view('dashboard.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'School');
    }
    public function collegeIndex(Request $request)
    {
        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'College')->select('institutions.*', 'users.img as img');
        $type = "College";
        if ($request->financial != '') {
            $institutions = $institutions->where('is_financial', $request->financial);
        }
        $institutions = $institutions->get();

        return view('dashboard.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'College');
    }
    public function universityIndex(Request $request)
    {
        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'University')->select('institutions.*', 'users.img as img');
        if ($request->financial != '') {
            $institutions = $institutions->where('is_financial', $request->financial);
        }
        $institutions = $institutions->get();


        $type = "University";

        return view('dashboard.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'University');
    }
    public function rcicConsultantIndex()
    {
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'RCIC Consultant')->select('providers.*', 'users.img as img')->get();
        $type = "RCIC Consultant";
        return view('dashboard.consultant')->with('consultants', $consultants)->with('type', $type)->with('unique', 'RCIC Consultant');
    }
    public function immigrationIndex()
    {
        $type = "Immigration Lawyer/Attorney";
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'Immigration Lawyer/Attorney')->select('providers.*', 'users.img as img')->get();
        return view('dashboard.consultant')->with('consultants', $consultants)->with('type', $type)->with('unique', 'Immigration Lawyer/Attorney');
    }
}
