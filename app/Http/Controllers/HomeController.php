<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\MembershipCandidate;
use App\Models\MembershipInstitution;
use App\Models\MembershipProvider;
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
        if ($membership->membership_plan_id) {
            $package = MembershipCandidate::where('id', $membership->membership_plan_id)->value('type');
        } else {
            $package = '';
        }
        $membershipCandidate1 = MembershipCandidate::find(1);
        $membershipCandidate4 = MembershipCandidate::find(2);
        $membershipCandidate7 = MembershipCandidate::find(3);
        $membershipCandidate2 = MembershipCandidate::find(4);
        $membershipCandidate5 = MembershipCandidate::find(5);
        $membershipCandidate8 = MembershipCandidate::find(6);
        $membershipCandidate3 = MembershipCandidate::find(7);
        $membershipCandidate6 = MembershipCandidate::find(8);
        $membershipCandidate9 = MembershipCandidate::find(9);

        return view('membership')->with('membership', $membership)->with('package', $package)
            ->with('membershipCandidate1', $membershipCandidate1)
            ->with('membershipCandidate4', $membershipCandidate4)
            ->with('membershipCandidate7', $membershipCandidate7)
            ->with('membershipCandidate2', $membershipCandidate2)
            ->with('membershipCandidate2', $membershipCandidate2)
            ->with('membershipCandidate5', $membershipCandidate5)
            ->with('membershipCandidate8', $membershipCandidate8)
            ->with('membershipCandidate3', $membershipCandidate3)
            ->with('membershipCandidate6', $membershipCandidate6)
            ->with('membershipCandidate9', $membershipCandidate9);
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
        $mId = MembershipCandidate::where('type', $request->package)->where('duration', $request->membership_duration)->value('id');
        $user->membership_plan_id =  $mId;

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
    public function packageAdd(Request $request)
    {
        $user =   User::find(Auth::user()->id);

        $mId = MembershipCandidate::where('type', $request->package)->where('duration', $request->membership_duration)->value('id');
        $user->membership_plan_id = $mId;
        $user->save();

        return redirect(route('membership'));
    }


    public function membershipInstitude()
    {
        $membership =   User::where('users.id', Auth::user()->id)->join('institutions', 'institutions.user_id', 'users.id')
            ->select('users.*', 'institutions.name')->first();

        if ($membership->membership_institution_id) {
            $package = MembershipInstitution::where('id', $membership->membership_institution_id)->value('type');
        } else {
            $package = '';
        }
        return view('membershipInstitude')->with('membership', $membership)->with('package', $package);
    }
    public function membershipAddInstitude()
    {

        $membership =   User::where('users.id', Auth::user()->id)->join('institutions', 'institutions.user_id', 'users.id')
            ->select('users.*', 'institutions.name')->first();

        return view('membershipInstitudeAdd')->with('membership', $membership);
    }
    public function membershipStoreInstitude(Request $request)
    {

        $user =   User::find(Auth::user()->id);
        $user->start_date = $request->start_date;
        $user->end_date = $request->end_date;
        $user->membership_duration = $request->membership_duration;

        $mId = MembershipInstitution::where('type', $request->package)->where('duration', $request->membership_duration)->value('id');
        $user->membership_institution_id  =  $mId;

        $user->save();

        return redirect(route('membership.institude'));
    }

    public function packageAddInstitude(Request $request)
    {
        $user =   User::find(Auth::user()->id);

        $mId = MembershipInstitution::where('type', $request->package)->where('duration', $request->membership_duration)->value('id');
        $user->membership_institution_id = $mId;
        $user->save();

        return redirect(route('membership.institude'));
    }

    public function membershipProvider()
    {
        $membership =   User::where('users.id', Auth::user()->id)->join('providers', 'providers.user_id', 'users.id')
            ->select('users.*', 'providers.first_name', 'providers.last_name')->first();

        if ($membership->membership_provider_id) {
            $package = MembershipProvider::where('id', $membership->membership_provider_id)->value('type');
        } else {
            $package = '';
        }

        $membershipCandidate1 = MembershipProvider::find(1);
        $membershipCandidate4 = MembershipProvider::find(2);
        $membershipCandidate7 = MembershipProvider::find(3);
        $membershipCandidate2 = MembershipProvider::find(4);
        $membershipCandidate5 = MembershipProvider::find(5);
        $membershipCandidate8 = MembershipProvider::find(6);
        $membershipCandidate3 = MembershipProvider::find(7);
        $membershipCandidate6 = MembershipProvider::find(8);
        $membershipCandidate9 = MembershipProvider::find(9);

        return view('membershipProvider')->with('membership', $membership)->with('package', $package)
            ->with('membershipCandidate1', $membershipCandidate1)
            ->with('membershipCandidate4', $membershipCandidate4)
            ->with('membershipCandidate7', $membershipCandidate7)
            ->with('membershipCandidate2', $membershipCandidate2)
            ->with('membershipCandidate2', $membershipCandidate2)
            ->with('membershipCandidate5', $membershipCandidate5)
            ->with('membershipCandidate8', $membershipCandidate8)
            ->with('membershipCandidate3', $membershipCandidate3)
            ->with('membershipCandidate6', $membershipCandidate6)
            ->with('membershipCandidate9', $membershipCandidate9);
    }
    public function membershipAddProvider()
    {

        $membership =   User::where('users.id', Auth::user()->id)->join('providers', 'providers.user_id', 'users.id')
            ->select('users.*', 'providers.first_name', 'providers.last_name')->first();

        return view('membershipProviderAdd')->with('membership', $membership);
    }
    public function membershipStoreProvider(Request $request)
    {

        $user =   User::find(Auth::user()->id);
        $user->start_date = $request->start_date;
        $user->end_date = $request->end_date;
        $user->membership_duration = $request->membership_duration;

        $mId = MembershipProvider::where('type', $request->package)->where('duration', $request->membership_duration)->value('id');
        $user->membership_provider_id  =  $mId;

        $user->save();

        return redirect(route('membership.provider'));
    }

    public function packageAddProvider(Request $request)
    {
        $user =   User::find(Auth::user()->id);

        $mId = MembershipProvider::where('type', $request->package)->where('duration', $request->membership_duration)->value('id');
        $user->membership_provider_id = $mId;
        $user->save();

        return redirect(route('membership.provider'));
    }
}
