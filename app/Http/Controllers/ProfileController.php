<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Personal;
use App\Models\Academy;
use App\Models\Work;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $personal =  Personal::where('user_id', $id)->first();
        $Academy =  Academy::where('user_id', $id)->first();
        $Sponsor =  Sponsor::where('user_id', $id)->first();
        $Work =  Work::where('user_id', $id)->get();

        $qualification = DB::table('candidate_academics')
            ->join('qualifications', 'qualifications.candidate_academic_id', '=', 'candidate_academics.id')
            ->where('candidate_academics.user_id', $id)
            ->get();

           
        return view('candidateProfile')
        ->with('personal', $personal)
        ->with('Academy', $Academy)
        ->with('Sponsor', $Sponsor)
        ->with('Work', $Work)
        ->with('qualification', $qualification);
    }
}
