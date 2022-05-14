<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Qualification;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CandidateAcademyController extends Controller
{

    function store(Request $request)
    {
        $id = Auth::user()->id;

        $academy = new Academy;
        $academy->user_id = $id;
        $academy->language_proficiency = $request->language_proficiency;
        $academy->language_level = $request->language_level;
        $academy->language_certified_by = $request->language_certified_by;
        $academy->language_attachment = $request->language_attachment;
        $academy->applicant_test_name = $request->applicant_test_name[0] ?? $request->applicant_test_name[1];
        $academy->test_valid_upto = $request->test_valid_upto;

   
        if ($request->test_attachment) {
            $files = $request->test_attachment;
            $request->test_attachment->getClientOriginalName();
            $name =  $request->test_attachment->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $academy->test_attachment = $name;
          
           
        }
        if ($request->language_attachment) {
            $files = $request->language_attachment;
            $request->language_attachment->getClientOriginalName();
            $name =  $request->language_attachment->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $academy->language_attachment =  $name;
        }
       
        $academy->save();
       

        if ($request->type) {
            $count = count($request->type);

            $newcount = $count - 1;
            if ($request->attachment) {
                $newKeys_experience = array_fill_keys(range(0,   $newcount), "");
                $request->attachment += $newKeys_experience;
            }
            for ($i = 0; $i < $count; $i++) {
                $qualification = new Qualification;
                $qualification->candidate_academic_id = $academy->id;
                $qualification->type = $request->type[$i];
                $qualification->name = $request->name[$i];
                $qualification->tech = $request->tech[$i];
                $qualification->address = $request->address[$i];
                $qualification->distant = $request->distant[$i];
                $qualification->Year_completion = $request->year_completed[$i];
                $qualification->applicable_eca_validity = $request->eca[$i];
                $qualification->country = $request->country[$i];
                if ($request->attachment) {

                    if ($request->attachment[$i]) {
                        $files = $request->attachment[$i];
                        $request->attachment[$i]->getClientOriginalName();
                        $name =  $request->attachment[$i]->getClientOriginalName();

                        $destinationPath = public_path() . '/files';
                        $files->move($destinationPath, $name);
                        $qualification->attachment = $name;
                    }
                }
                $qualification->save();
            }
        }
        return "success";
    }
}
