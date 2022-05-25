<?php

namespace App\Http\Controllers;
use App\Models\Consultant;
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

        $consaltans = Consultant::where('type','RCIC Consultant')->get();
       
        return view('dashboard.consultant')->with('consaltans',$consaltans);
    }
    public function businessIndex(){
        
        $bussiness = Consultant::where('type','Chartered Accountant')->get(); 
       
        return view('dashboard.business')->with('bussiness',$bussiness);
    }
    public function consultantView($id){
        
        $consultants = Consultant::find($id);
        $teams = Team::where('provider_id', $consultants->id)->get();
       
        return view('providerProfile.consultantProfile')->with('consultants',$consultants)->with('teams',$teams)->with('view','view');
    }
    public function businessView($id){
        
        $consultants = Consultant::find($id);
        $teams = Team::where('provider_id', $consultants->id)->get();
       
        return view('providerProfile.business')->with('consultants',$consultants)->with('teams',$teams)->with('view','view');
    }
    public function institutionView($id){

        $institutions =  Institution::find($id);
       
        return view('providerProfile.institudeProfile')->with('institutions',$institutions)->with('view','view');
    }

}
