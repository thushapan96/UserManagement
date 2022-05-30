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

        $Institution->save();
        return redirect(route('institudeProfile'))->with('formSuccess', 'Saved!');
    }
}
