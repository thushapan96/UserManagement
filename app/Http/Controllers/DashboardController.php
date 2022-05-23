<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\Institution;


use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class DashboardController extends Controller
{
    public function institudeIndex(){
        
        $institutions = Institution::all();
       
        return view('dashboard.institution')->with('institutions',$institutions);
    }
    public function consultantIndex(){

        $consaltans = Provider::where('type','RCIC Consultant')->get();
       
        return view('dashboard.consultant')->with('consaltans',$consaltans);
    }
    public function businessIndex(){
        
        $bussiness = Provider::where('type','Chartered Accountant')->get(); 
       
        return view('dashboard.business')->with('bussiness',$bussiness);
    }
}
