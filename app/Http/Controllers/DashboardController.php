<?php

namespace App\Http\Controllers;
use App\Models\Consultant;
use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class DashboardController extends Controller
{
    public function index(){
        $consultants = Consultant::all();

        return view('dashboard')->with('consultants',$consultants);
    }
}
