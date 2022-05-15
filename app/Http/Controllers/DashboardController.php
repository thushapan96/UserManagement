<?php

namespace App\Http\Controllers;
use App\Models\Consultant;
use App\Models\Institution;


use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class DashboardController extends Controller
{
    public function index(){
        $consultants = Consultant::all();
        $institutions = Institution::all();
        $bussinesses = Institution::all();

dd($consultants);
        return view('dashboard')->with('consultants',$consultants)->with('institutions',$institutions);
    }
}
