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


        $teams = Team::where('provider_id', $id)->get();

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

        $teams = Team::where('provider_id', $id)->get();

        if ($consultants) {
            return view('providerProfile.business')->with('consultants', $consultants)->with('teams', $teams);
        } else {
            return redirect(route('register.business'));
        }
    }
}
