<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution;
use App\Models\Consultant;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class OtherController extends Controller
{
    public function canadaInspire()
    {
    }
    public function feedback()
    {
        $id  = Auth::user()->id;
        if (Auth::user()->service_type == 'Consultation' || Auth::user()->service_type == 'Business') {
            $feedback =   Consultant::where('user_id', $id)->value('Comment');
        } elseif (Auth::user()->service_type == 'Institution') {
            $feedback =   Institution::where('user_id', $id)->value('Comment');
        } 
        return view('other.feedback')->with('feedback',$feedback);
    }
}
