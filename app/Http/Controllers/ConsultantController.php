<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ConsultantController extends Controller
{
    public function index()
    {
        return view('register.consultant');
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
        }

        Provider::create($request->all());

        return redirect('/');
    }
}
