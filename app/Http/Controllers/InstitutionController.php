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
            $request->privacy_policy_document->getClientOriginalName();
            $name =  $request->privacy_policy_document->getClientOriginalName();

            $destinationPath = public_path() . '/files';
            $files->move($destinationPath, $name);
            $request->privacy_policy_document =  $name;
            $request->merge([
                'privacy_policy_document' => $name,
            ]);
           
        }
       
        $request->replace($request->except(['privacy_policy_document']));

        
        Institution::create($request->all()+['privacy_policy_document' =>  $name]);

        return redirect('/');
    }
}
