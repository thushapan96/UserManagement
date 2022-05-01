<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Http\Controllers\Exception;

class CandidateWorkController extends Controller
{
    public function store(Request $request)
    {

        $count =  count($request->designation);
        return $request->all();

        for ($i = 0; $i < $count; $i++) {
            if ($request->designation[$i] != "") {

                $Work = new Work;
                $Work->designation =  $request->designation[$i];
                $Work->country =  $request->country[$i];
                $Work->Year_completion =  $request->Year_completion[$i];

                if (in_array($request->attach_experience_certificate[$i], $request->all())) {
                    return 1;
                    $files = $request->attach_experience_certificate[$i];
                    $name =   $files->getClientOriginalName();

                    $destinationPath = public_path() . '/files';
                    $files->move($destinationPath, $name);
                    $Work->attach_experience_certificate =  $name;
                } else {
                    return 0;
                }

                if ($request->attach_salary_slip[$i]) {
                    return 1;
                    $files = $request->attach_salary_slip[$i];
                    $name =   $files->getClientOriginalName();

                    $destinationPath = public_path() . '/files';
                    $files->move($destinationPath, $name);
                    $Work->attach_salary_slip =  $name;
                } else {
                    return 2;
                }

                if ($request->attach_offer_letter[$i] != "") {
                    $files = $request->attach_offer_letter[$i];
                    $name =   $files->getClientOriginalName();

                    $destinationPath = public_path() . '/files';
                    $files->move($destinationPath, $name);
                    $Work->attach_offer_letter =  $name;
                    return 1;
                }
                return 2;
                $Work->work_profile_letter =   $request->work_profile_letter[$i];
                $Work->save();
            }
        }
    }
}
