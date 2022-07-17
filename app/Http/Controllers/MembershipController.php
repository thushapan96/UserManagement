<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\MembershipCandidate;
use App\Models\MembershipInstitution;
use App\Models\MembershipProvider;
use App\Models\Setting;
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

        for ($i = 1; $i < 10; $i++) {

            $membershipCandidate = MembershipCandidate::find($i);

            $membershipCandidate->Dashboard = $request->input("Dashboard$i");
            $membershipCandidate->EA = $request->input("EA$i");
            $membershipCandidate->Calculator = $request->input("Calculator$i");
            $membershipCandidate->EnquiriesSchool = $request->input("EnquiriesSchool$i");
            $membershipCandidate->EnquiriesUniversity = $request->input("EnquiriesUniversity$i");
            $membershipCandidate->EnquiriesCollege = $request->input("EnquiriesCollege$i");
            $membershipCandidate->EnquiriesRCICConsultant = $request->input("EnquiriesRCICConsultant$i");
            $membershipCandidate->EnquiriesImmigration = $request->input("EnquiriesImmigration$i");
            $membershipCandidate->EnquiriesBusiness = $request->input("EnquiriesBusiness$i");
            $membershipCandidate->DefaultReports = $request->input("DefaultReports$i");
            $membershipCandidate->CustomizedReports = $request->input("CustomizedReports$i");
            $membershipCandidate->ChatAgents = $request->input("ChatAgents$i");
            $membershipCandidate->EmailSupport = $request->input("EmailSupport$i");
            $membershipCandidate->TelephonicSupport = $request->input("TelephonicSupport$i");
            $membershipCandidate->Add_On_features_Free = $request->input("Add_On_features_Free$i");
            $membershipCandidate->Anytime_Single_Multiple = $request->input("Anytime_Single_Multiple$i");
            $membershipCandidate->price = $request->input("price$i");

            $membershipCandidate->save();
        }


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


        for ($i = 1; $i < 10; $i++) {

            $MembershipCandidate = MembershipInstitution::find($i);

            $MembershipCandidate->Dashboard = $request->input("Dashboard$i");
            $MembershipCandidate->EA = $request->input("EA$i");
            $MembershipCandidate->Diploma = $request->input("Diploma$i");
            $MembershipCandidate->PG_Diploma = $request->input("PG_Diploma$i");
            $MembershipCandidate->Certification = $request->input("Certification$i");
            $MembershipCandidate->Graduation = $request->input("Graduation$i");
            $MembershipCandidate->Post_Graduation = $request->input("Post_Graduation$i");
            $MembershipCandidate->Doctorate = $request->input("Doctorate$i");
            $MembershipCandidate->DefaultReports = $request->input("DefaultReports$i");
            $MembershipCandidate->CustomizedReports = $request->input("CustomizedReports$i");
            $MembershipCandidate->ChatAgents = $request->input("ChatAgents$i");
            $MembershipCandidate->EmailSupport = $request->input("EmailSupport$i");
            $MembershipCandidate->TelephonicSupport = $request->input("TelephonicSupport$i");
            $MembershipCandidate->Add_On_features_Free = $request->input("Add_On_features_Free$i");
            $MembershipCandidate->AppointmentScheduler = $request->input("AppointmentScheduler$i");
            $MembershipCandidate->eLearningManagementSystem = $request->input("eLearningManagementSystem$i");
            $MembershipCandidate->QuickBooks = $request->input("QuickBooks$i");
            $MembershipCandidate->price = $request->input("price$i");

            $MembershipCandidate->save();
        }


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

        for ($i = 1; $i < 10; $i++) {
            $MembershipCandidate = MembershipProvider::find($i);

            $MembershipCandidate->Dashboard = $request->input("Dashboard$i");
            $MembershipCandidate->Calculator = $request->input("Calculator$i");
            $MembershipCandidate->EnquiriesRCICConsultant = $request->input("EnquiriesRCICConsultant$i");
            $MembershipCandidate->EnquiriesImmigration = $request->input("EnquiriesImmigration$i");
            $MembershipCandidate->EnquiriesBusiness = $request->input("EnquiriesBusiness$i");
            $MembershipCandidate->DefaultReports = $request->input("DefaultReports$i");
            $MembershipCandidate->CustomizedReports = $request->input("CustomizedReports$i");
            $MembershipCandidate->ChatAgents = $request->input("ChatAgents$i");
            $MembershipCandidate->EmailSupport = $request->input("EmailSupport$i");
            $MembershipCandidate->TelephonicSupport = $request->input("TelephonicSupport$i");
            $MembershipCandidate->Add_On_features_Free = $request->input("Add_On_features_Free$i");
            $MembershipCandidate->AppointmentScheduler = $request->input("AppointmentScheduler$i");
            $MembershipCandidate->CRM = $request->input("CRM$i");
            $MembershipCandidate->QuickBooks = $request->input("QuickBooks$i");
            $MembershipCandidate->price = $request->input("price$i");

            $MembershipCandidate->save();
        }

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

        $count = count($request->type);

        for ($i = 0; $i < $count; $i++) {
            MembershipCandidate::where('type', $request->type[$i])->where('duration', $request->duration[$i])->update([
                'price' => $request->price[$i]
            ]);
        }

        return redirect(route('candidate.price'));
    }

    public function institutionPriceChange(Request $request)
    {

        $count = count($request->type);

        for ($i = 0; $i < $count; $i++) {
            MembershipInstitution::where('type', $request->type[$i])->where('duration', $request->duration[$i])->update([
                'price' => $request->price[$i]
            ]);
        }

        return redirect(route('institution.price'));
    }

    public function providerPriceChange(Request $request)
    {

        $count = count($request->type);

        for ($i = 0; $i < $count; $i++) {
            MembershipProvider::where('type', $request->type[$i])->where('duration', $request->duration[$i])->update([
                'price' => $request->price[$i]
            ]);
        }
        return redirect(route('provider.price'));
    }

    public function configure(Request $request)
    {
        $currency = Setting::where('type', 'currency')->first();
        $dateConfigure = Setting::where('type', 'date')->first();

        return view('admin.configure')->with('currency', $currency)->with('dateConfigure', $dateConfigure);
    }

    public function currencyChange(Request $request)
    {
        $currency = Setting::where('type', 'currency')->first();
        $currency->value = $request->currency;
        $currency->save();

        return redirect(route('configure'));
    }

    public function dateChange(Request $request)
    {
        $date = Setting::where('type', 'date')->first();
        $date->value = $request->date;
        $date->save();

        return redirect(route('configure'));
    }
}
