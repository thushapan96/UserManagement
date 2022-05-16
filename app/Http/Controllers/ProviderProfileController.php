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

        return view('providerProfile.institudeProfile')->with('institutions', $institutions);
    }

    public function consultantIndex()
    {
        $id = Auth::user()->id;
        $consultants =  Consultant::where('user_id', $id)->first();

        $teams = Team::where('provider_id', $id)->get();

        return view('providerProfile.consultantProfile')->with('consultants', $consultants)->with('teams', $teams);
    }

    public function businessIndex()
    {
        $id = Auth::user()->id;
        $consultants =  Consultant::where('user_id', $id)->first();

        $teams = Team::where('provider_id', $id)->get();

        return view('providerProfile.business')->with('consultants', $consultants)->with('teams', $teams);
    }
}
