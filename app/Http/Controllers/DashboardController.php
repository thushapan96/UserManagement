<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\Institution;


use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class DashboardController extends Controller
{
    public function index(){
        $consaltans = Provider::where('type','Immigration Lawyer/Attorney')->get();
        $bussiness = Provider::where('type','Chartered Accountant')->get();
        
        $institutions = Institution::all();
        return view('dashboard')->with('consaltans',$consaltans)->with('institutions',$institutions)->with('bussiness',$bussiness);
    }
}
