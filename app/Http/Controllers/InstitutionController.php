<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Http\Requests\InstitutionRequest;
use App\Http\Controllers\Controller;




class InstitutionController extends Controller
{
    public function index()
    {
        return view('register.institude');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\InstitutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->privacy_policy_document) {
            $files = $request->privacy_policy_document;
            $nameprivacy_policy_document = $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameprivacy_policy_document);
          
        }
        if ($request->Award) {
            $files = $request->Award;
            $nameAward =  $files->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $nameAward);
            
        }

        $Institution = Institution::create($request->all());
        $Institution->privacy_policy_document = $nameprivacy_policy_document;
        $Institution->Award = $nameAward;
        $Institution->save();
        return redirect('/');
    }
}
