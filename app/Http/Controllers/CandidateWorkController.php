<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CandidateWorkController extends Controller
{
    public function store(Request $request)
    {

        $count =  count($request->designation);
        $newcount = $count - 1;
        if ($request->attach_experience_certificate) {
            $newKeys_experience = array_fill_keys(range(0,   $newcount), "");
            $request->attach_experience_certificate += $newKeys_experience;
          
        }

        if ($request->attach_salary_slip) {
            $newKeys_salary = array_fill_keys(range(0, $newcount), "");
            $request->attach_salary_slip += $newKeys_salary;
        }
        
        if ($request->attach_offer_letter) {
            $newKeys_offer = array_fill_keys(range(0, $newcount), "");
            $request->attach_offer_letter += $newKeys_offer;
        }


        for ($i = 0; $i < $count; $i++) {
            if ($request->designation[$i] != "") {

                $Work = new Work;
                $Work->designation =  $request->designation[$i];
                $Work->country =  $request->country[$i];
                $Work->Year_completion =  $request->Year_completion[$i];
                if ($request->attach_experience_certificate) {
                    if ($request->attach_experience_certificate[$i] != "") {
                        $files = $request->attach_experience_certificate[$i];
                        $name =   $files->getClientOriginalName();
                        $destinationPath = public_path() . '/files';
                        $files->move($destinationPath, $name);
                        $Work->attach_experience_certificate =  $name;
                    }
                }
                if ($request->attach_salary_slip) {
                    if ($request->attach_salary_slip[$i] != "") {

                        $files = $request->attach_salary_slip[$i];
                        $name =   $files->getClientOriginalName();

                        $destinationPath = public_path() . '/files';
                        $files->move($destinationPath, $name);
                        $Work->attach_salary_slip =  $name;
                    }
                }
                if ($request->attach_offer_letter[$i] != "") {
                    $files = $request->attach_offer_letter[$i];
                    $name =   $files->getClientOriginalName();

                    $destinationPath = public_path() . '/files';
                    $files->move($destinationPath, $name);
                    $Work->attach_offer_letter =  $name;
                }

                $Work->work_profile_letter =   $request->work_profile_letter[$i];
                $Work->save();
            }
        }
    }
}
