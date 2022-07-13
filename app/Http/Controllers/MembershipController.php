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

class MembershipController extends Controller
{
    public function membershipCandidate()
    {
        $membershipCandidate1 = MembershipCandidate::find(1);
        $membershipCandidate4 = MembershipCandidate::find(2);
        $membershipCandidate7 = MembershipCandidate::find(3);
        $membershipCandidate2 = MembershipCandidate::find(4);
        $membershipCandidate5 = MembershipCandidate::find(5);
        $membershipCandidate8 = MembershipCandidate::find(6);
        $membershipCandidate3 = MembershipCandidate::find(7);
        $membershipCandidate6 = MembershipCandidate::find(8);
        $membershipCandidate9 = MembershipCandidate::find(9);

        return view('admin.membership.candidate')->with('membershipCandidate1', $membershipCandidate1)
            ->with('membershipCandidate2', $membershipCandidate2)
            ->with('membershipCandidate3', $membershipCandidate3)
            ->with('membershipCandidate4', $membershipCandidate4)
            ->with('membershipCandidate5', $membershipCandidate5)
            ->with('membershipCandidate6', $membershipCandidate6)
            ->with('membershipCandidate7', $membershipCandidate7)
            ->with('membershipCandidate8', $membershipCandidate8)
            ->with('membershipCandidate9', $membershipCandidate9);
    }

    public function candidateMebershipAdd(Request $request)
    {

        $MembershipCandidate = MembershipCandidate::where('type', $request->type)->where('duration', $request->duration)->first();

        $MembershipCandidate->Dashboard = $request->Dashboard;

        $MembershipCandidate->EA = $request->EA;
        $MembershipCandidate->Calculator = $request->Calculator;
        $MembershipCandidate->EnquiriesSchool = $request->EnquiriesSchool;
        $MembershipCandidate->EnquiriesUniversity = $request->EnquiriesUniversity;
        $MembershipCandidate->EnquiriesCollege = $request->EnquiriesCollege;
        $MembershipCandidate->EnquiriesRCICConsultant = $request->EnquiriesRCICConsultant;
        $MembershipCandidate->EnquiriesImmigration = $request->EnquiriesImmigration;
        $MembershipCandidate->EnquiriesBusiness = $request->EnquiriesBusiness;
        $MembershipCandidate->DefaultReports = $request->DefaultReports;
        $MembershipCandidate->CustomizedReports = $request->CustomizedReports;
        $MembershipCandidate->ChatAgents = $request->ChatAgents;
        $MembershipCandidate->EmailSupport = $request->EmailSupport;
        $MembershipCandidate->TelephonicSupport = $request->TelephonicSupport;
        $MembershipCandidate->Add_On_features_Free = $request->Add_On_features_Free;
        $MembershipCandidate->Anytime_Single_Multiple = $request->Anytime_Single_Multiple;

        $MembershipCandidate->save();

        $tab = $request->duration;
        return redirect(route('admin.membership.candidate'))->with('tab', $tab);
    }

    public function membershipInstitution()
    {
        $membershipCandidate1 = MembershipInstitution::find(1);
        $membershipCandidate4 = MembershipInstitution::find(2);
        $membershipCandidate7 = MembershipInstitution::find(3);
        $membershipCandidate2 = MembershipInstitution::find(4);
        $membershipCandidate5 = MembershipInstitution::find(5);
        $membershipCandidate8 = MembershipInstitution::find(6);
        $membershipCandidate3 = MembershipInstitution::find(7);
        $membershipCandidate6 = MembershipInstitution::find(8);
        $membershipCandidate9 = MembershipInstitution::find(9);

        return view('admin.membership.institution')->with('membershipCandidate1', $membershipCandidate1)
            ->with('membershipCandidate2', $membershipCandidate2)
            ->with('membershipCandidate3', $membershipCandidate3)
            ->with('membershipCandidate4', $membershipCandidate4)
            ->with('membershipCandidate5', $membershipCandidate5)
            ->with('membershipCandidate6', $membershipCandidate6)
            ->with('membershipCandidate7', $membershipCandidate7)
            ->with('membershipCandidate8', $membershipCandidate8)
            ->with('membershipCandidate9', $membershipCandidate9);
    }

    public function institutionMebershipAdd(Request $request)
    {

        $MembershipCandidate = MembershipInstitution::where('type', $request->type)->where('duration', $request->duration)->first();

        $MembershipCandidate->Dashboard = $request->Dashboard;
        $MembershipCandidate->EA = $request->EA;
        $MembershipCandidate->Enquiries = $request->Enquiries;
        $MembershipCandidate->DefaultReports = $request->DefaultReports;
        $MembershipCandidate->CustomizedReports = $request->CustomizedReports;
        $MembershipCandidate->ChatAgents = $request->ChatAgents;
        $MembershipCandidate->EmailSupport = $request->EmailSupport;
        $MembershipCandidate->TelephonicSupport = $request->TelephonicSupport;
        $MembershipCandidate->Add_On_features_Free = $request->Add_On_features_Free;
        $MembershipCandidate->AppointmentScheduler = $request->AppointmentScheduler;
        $MembershipCandidate->eLearningManagementSystem = $request->eLearningManagementSystem;
        $MembershipCandidate->QuickBooks = $request->QuickBooks;

        $MembershipCandidate->save();

        $tab = $request->duration;

        return redirect(route('admin.membership.institution'))->with('tab', $tab);
    }
    public function membershipProvider()
    {
        $membershipCandidate1 = MembershipProvider::find(1);
        $membershipCandidate4 = MembershipProvider::find(2);
        $membershipCandidate7 = MembershipProvider::find(3);
        $membershipCandidate2 = MembershipProvider::find(4);
        $membershipCandidate5 = MembershipProvider::find(5);
        $membershipCandidate8 = MembershipProvider::find(6);
        $membershipCandidate3 = MembershipProvider::find(7);
        $membershipCandidate6 = MembershipProvider::find(8);
        $membershipCandidate9 = MembershipProvider::find(9);

        return view('admin.membership.provider')->with('membershipCandidate1', $membershipCandidate1)
            ->with('membershipCandidate2', $membershipCandidate2)
            ->with('membershipCandidate3', $membershipCandidate3)
            ->with('membershipCandidate4', $membershipCandidate4)
            ->with('membershipCandidate5', $membershipCandidate5)
            ->with('membershipCandidate6', $membershipCandidate6)
            ->with('membershipCandidate7', $membershipCandidate7)
            ->with('membershipCandidate8', $membershipCandidate8)
            ->with('membershipCandidate9', $membershipCandidate9);
    }

    public function providerMebershipAdd(Request $request)
    {

        $MembershipCandidate = MembershipProvider::where('type', $request->type)->where('duration', $request->duration)->first();

        $MembershipCandidate->Dashboard = $request->Dashboard;
        $MembershipCandidate->Calculator = $request->Calculator;
        $MembershipCandidate->EnquiriesRCICConsultant = $request->EnquiriesRCICConsultant;
        $MembershipCandidate->EnquiriesImmigration = $request->EnquiriesImmigration;
        $MembershipCandidate->EnquiriesBusiness = $request->EnquiriesBusiness;
        $MembershipCandidate->DefaultReports = $request->DefaultReports;
        $MembershipCandidate->CustomizedReports = $request->CustomizedReports;
        $MembershipCandidate->ChatAgents = $request->ChatAgents;
        $MembershipCandidate->EmailSupport = $request->EmailSupport;
        $MembershipCandidate->TelephonicSupport = $request->TelephonicSupport;
        $MembershipCandidate->Add_On_features_Free = $request->Add_On_features_Free;
        $MembershipCandidate->AppointmentScheduler = $request->AppointmentScheduler;
        $MembershipCandidate->CRM = $request->CRM;
        $MembershipCandidate->QuickBooks = $request->QuickBooks;

        $MembershipCandidate->save();

        $tab = $request->duration;

        return redirect(route('admin.membership.provider'))->with('tab', $tab);
    }

    public function candidatePrice(Request $request)
    {
        
        $membershipCandidate = MembershipCandidate::select('type', 'duration', 'price')->get();

        return view('admin.package.candidate')->with('membershipCandidate', $membershipCandidate);
    }
    public function institutionPrice(Request $request)
    {
        $membershipCandidate = MembershipInstitution::select('type', 'duration', 'price')->get();

        return view('admin.package.institude')->with('membershipCandidate', $membershipCandidate);
    }
    public function providerPrice(Request $request)
    {
        $membershipCandidate = MembershipProvider::select('type', 'duration', 'price')->get();

        return view('admin.package.consultant')->with('membershipCandidate', $membershipCandidate);
    }

    public function candidatePriceChange(Request $request)
    {
        MembershipCandidate::where('type', $request->type)->where('duration', $request->duration)->update([
            'price' => $request->price
        ]);

        return redirect(route('candidate.price'));
    }

    public function institutionPriceChange(Request $request)
    {
        MembershipInstitution::where('type', $request->type)->where('duration', $request->duration)->update([
            'price' => $request->price
        ]);

        return redirect(route('institution.price'));
    }

    public function providerPriceChange(Request $request)
    {
        MembershipProvider::where('type', $request->type)->where('duration', $request->duration)->update([
            'price' => $request->price
        ]);

        return redirect(route('provider.price'));
    }
}
