<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Personal;
use Carbon\Carbon;

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

    public function membership()
    {

        $membership =   User::where('users.id', Auth::user()->id)->join('candidate_personals', 'candidate_personals.user_id', 'users.id')
            ->select('users.*', 'candidate_personals.first_name', 'candidate_personals.middle_name', 'candidate_personals.last_name')->first();

        return view('membership')->with('membership', $membership);
    }
    public function membershipAdd()
    {

        $membership =   User::where('users.id', Auth::user()->id)->join('candidate_personals', 'candidate_personals.user_id', 'users.id')
            ->select('users.*', 'candidate_personals.first_name', 'candidate_personals.middle_name', 'candidate_personals.last_name')->first();



        return view('membershipAdd')->with('membership', $membership);
    }
    public function membershipStore(Request $request)
    {

        $user =   User::find(Auth::user()->id);
        $user->start_date = $request->start_date;
        $user->end_date = $request->end_date;
        $user->membership_duration = $request->membership_duration;


        if ($request->is_service == 'yes') {
            $user->service = $request->service;
            $user->service_type = 'multiple';
        }
        $user->save();

        return redirect(route('membership'));
    }
    public function extendService(Request $request)
    {     
        $user =   User::find(Auth::user()->id);

        $user->service = $request->service;
        $user->service_type = 'multiple';

        $user->save();

        return redirect(route('membership'));
    }
}
