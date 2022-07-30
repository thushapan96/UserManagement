<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\User;
use App\Http\Requests\InstitutionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;




class InstitutionController extends Controller
{
    public function index()
    {
        return view('register.institude');


    }
    public function registerterm()
    {

        return view('register.terms');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\InstitutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $Institution = Institution::create($request->all());
        $Institution->user_id = Auth::user()->id;

        if ($request->privacy_policy_document) {
            $files = $request->privacy_policy_document;
            $nameprivacy_policy_document = $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameprivacy_policy_document);
            $Institution->privacy_policy_document = $nameprivacy_policy_document;
        }
        if ($request->Award) {
            $files = $request->Award;
            $nameAward =  $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameAward);
            $Institution->Award = $nameAward;
        }

        if ($request->img) {
            $files = $request->img;
            $nameimg =  $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameimg);

            User::where('id', Auth::user()->id)
                ->update([
                    'img' => $nameimg
                ]);
        }
        if ($request->hasFile('mutiImg_about_company')) {
            $names = [];
            foreach ($request->file('mutiImg_about_company') as $image) {
                $destinationPath = public_path() . '/files';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);
            }
            $Institution->mutiImg_about_company = $names;
        }
        if ($request->hasFile('mutiImg_about_award')) {
            $names = [];
            foreach ($request->file('mutiImg_about_award') as $image) {
                $destinationPath = public_path() . '/files';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);
            }
            $Institution->mutiImg_about_award = $names;
        }

        $Institution->save();
        return redirect(route('institudeProfile'))->with('formSuccess', 'Saved!');
    }
}
