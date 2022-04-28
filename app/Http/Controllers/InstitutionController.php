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
        return 1;
        return $request->validated();
       return  $request->name;
        if ($request->privacy_policy_document) {
            $files = $request->privacy_policy_document;
            $request->privacy_policy_document->getClientOriginalName();
            $name =  $request->privacy_policy_document->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $request->privacy_policy_document =  $name;
           
        }



        Institution::create($request->all());
        return 1;

        return redirect(route('home'));
    }
}
