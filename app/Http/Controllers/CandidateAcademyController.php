<?php

namespace App\Http\Controllers;
use App\Models\Academy;
use App\Models\Qualification;


use Illuminate\Http\Request;

class CandidateAcademyController extends Controller
{
    
    function store(Request $request){
        dd($request);
        $academy = new Academy;
        $academy->language_proficiency = $request->language_proficiency;
        $academy->language_level=$request->language_level;
        $academy->language_certified_by=$request->language_certified_by;
        $academy->language_attachment=$request->language_attachment;
        $academy->applicant_test_name=$request->applicant_test_name[0] ?? $request->applicant_test_name[1] ;
        $academy->test_valid_upto=$request->test_valid_upto;

        if ($request->test_attachment) {
            $files = $request->test_attachment;
            $request->test_attachment->getClientOriginalName();
            $name =  $request->test_attachment->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $request['test_attachment'] =  $name;
        }
        if ($request->language_attachment) {
            $files = $request->language_attachment;
            $request->language_attachment->getClientOriginalName();
            $name =  $request->language_attachment->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $request['language_attachment'] =  $name;
        }
$academy->test_attachment = $request->test_attachment;
$academy->language_attachment = $request->language_attachment;

$academy->save();

$count = count($request->type);
for ($i = 0; $i < $count; $i++) {
$qualification = new Qualification;
$qualification->type = $request->type[$i];
$qualification->name = $request->name[$i];
$qualification->tech = $request->tech[$i];
$qualification->address = $request->address[$i];
$qualification->distant = $request->distant[$i];
$qualification->Year_completion = $request->year_completed[$i];
$qualification->applicable_eca_validity = $request->eca[$i];
$qualification->country = $request->country[$i];
if($request->attachment[$i]){
    $files = $request->attachment[$i];
    $request->attachment[$i]->getClientOriginalName();
    $name =  $request->attachment[$i]->getClientOriginalName();

    $destinationPath = public_path() . '/files';
    $files->move($destinationPath, $name);
    $qualification->attachment = $name;
}
}
$qualification->save();
dd($qualification);

}}
