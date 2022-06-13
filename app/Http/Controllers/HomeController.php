<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        if ((Auth::user()->role) == 'candidate') {
            if (DB::table('candidate_personals')->where('user_id', '=', Auth::user()->id)->exists()) {
                return redirect(route('indexx'));
            } else {
                return redirect(route('candidate_personal'))->with('registermessage', 'Successfully  Submitted !');
            }
        } else {

            $service = Auth::user()->service;

            if (Auth::user()->service_type == 'Institution') {
                if (DB::table('institutions')->where('user_id', '=', Auth::user()->id)->exists()) {
                    return redirect(route('indexx'));
                } else {
                    return redirect(route('register.institude', ['service' => $service]))->with('registermessage', 'Successfully  Submitted !');
                }
            } elseif (Auth::user()->service_type == 'Consultation') {
                if (DB::table('providers')->where('user_id', '=', Auth::user()->id)->exists()) {
                    return redirect(route('indexx'));
                } else {
                    return redirect(route('register.consultant', ['service' => $service]))->with('registermessage', 'Successfully  Submitted !');
                }
            } elseif (Auth::user()->service_type == 'Business') {
                if (DB::table('providers')->where('user_id', '=', Auth::user()->id)->exists()) {
                    return redirect(route('indexx'));
                } else {
                    return redirect(route('register.business', ['service' => $service]))->with('registermessage', 'Successfully  Submitted !');
                }
            }
        }
    }
}
