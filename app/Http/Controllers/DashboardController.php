<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Institution;
use App\Models\User;
use App\Models\Team;
use App\Models\MembershipCandidate;
use App\Models\MembershipInstitution;
use App\Models\MembershipProvider;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function institudeIndex()
    {
        $institutions = Institution::all();

        return view('dashboard.institution')->with('institutions', $institutions)->with('unique', '');
    }
    public function consultantIndex()
    {

        $consultants = Consultant::where('type', 'RCIC Consultant')->orwhere('type', 'Immigration Lawyer/Attorney')->get();

        return view('dashboard.consultant')->with('consultants', $consultants)->with('unique', '');
    }
    public function businessIndex()
    {

        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'Chartered Accountant')->select('providers.*', 'users.img as img')->get();
        $type = "Chartered Accountant";
        return view('dashboard.business')->with('consultants', $consultants)->with('type', $type)->with('unique', '');
    }
    public function consultantView($id)
    {

        $consultants = Consultant::find($id);

        $user_id =  $consultants->user_id;
        $img = User::where('id', $user_id)->value('img');

        $teams = Team::where('provider_id', $consultants->id)->get();

        $membership_provider_id  =   User::where('id', $user_id)->value('membership_provider_id');
        $service  =   User::where('id', $user_id)->value('service');

        if ($membership_provider_id) {
            $MembershipProvider  =  MembershipProvider::find($membership_provider_id);
            if ($service == 'RCIC Consultant') {
                $MembershipProviderEnquiries  =  $MembershipProvider->EnquiriesRCICConsultant;
            } else {
                $MembershipProviderEnquiries  =  $MembershipProvider->EnquiriesImmigration;
            }
        } else {
            $MembershipProviderEnquiries   =  '';
        }

        $currentProviderEnquiries = Enquiry::where('provider_id', $id)->where('statuss', '>', 0)->count();

        return view('providerProfile.consultantProfile')->with('consultants', $consultants)
            ->with('teams', $teams)
            ->with('view', 'view')
            ->with('img', $img)
            ->with('currentProviderEnquiries', $currentProviderEnquiries)
            ->with('MembershipProviderEnquiries', $MembershipProviderEnquiries);
    }
    public function businessView($id)
    {
        $consultants = Consultant::find($id);
        $teams = Team::where('provider_id', $consultants->id)->get();
        $user_id =  $consultants->user_id;
        $img = User::where('id', $user_id)->value('img');
        $membership_provider_id  =   User::where('id', $user_id)->value('membership_provider_id');

        if ($membership_provider_id) {
            $MembershipProvider  =  MembershipProvider::find($membership_provider_id);

            $MembershipProviderEnquiries   =  $MembershipProvider->EnquiriesBusiness;
        } else {
            $MembershipProviderEnquiries   =  '';
        }

        $currentProviderEnquiries = Enquiry::where('provider_id', $id)->where('statuss', '>', 0)->count();

        return view('providerProfile.business')->with('consultants', $consultants)
            ->with('teams', $teams)->with('view', 'view')
            ->with('img', $img)
            ->with('currentProviderEnquiries', $currentProviderEnquiries)
            ->with('MembershipProviderEnquiries', $MembershipProviderEnquiries);;
    }
    public function institutionView($id)
    {

        $institutions =  Institution::find($id);
        $user_id =  $institutions->user_id;
        $img = User::where('id', $user_id)->value('img');

        $membership_institution_id =   User::where('id', $user_id)->value('membership_institution_id');
        if ($membership_institution_id) {
            $MembershipInstitution  =  MembershipInstitution::find($membership_institution_id);
            $MembershipInstitutionDiploma  = $MembershipInstitution->Diploma;
            $MembershipInstitutionPG_Diploma   = $MembershipInstitution->PG_Diploma;
            $MembershipInstitutionCertification   = $MembershipInstitution->Certification;
            $MembershipInstitutionGraduation   = $MembershipInstitution->Graduation;
            $MembershipInstitutionPost_Graduation   = $MembershipInstitution->Post_Graduation;
            $MembershipInstitutionDoctorate   = $MembershipInstitution->Doctorate;
        } else {
            $MembershipInstitutionDiploma  = '';
            $MembershipInstitutionPG_Diploma   = '';
            $MembershipInstitutionCertification   = '';
            $MembershipInstitutionGraduation   = '';
            $MembershipInstitutionPost_Graduation   = '';
            $MembershipInstitutionDoctorate   = '';
        }


        $currentDiploma = Enquiry::where('institution_id', $id)->whereJsonContains('course_enquiry', 'Diploma')->where('statuss', '>', 0)->count();
        $currentPG_Diploma = Enquiry::where('institution_id', $id)->whereJsonContains('course_enquiry', 'PG Diploma')->where('statuss', '>', 0)->count();
        $currentCertification = Enquiry::where('institution_id', $id)->whereJsonContains('course_enquiry', 'Certification')->where('statuss', '>', 0)->count();

        $currentGraduation = Enquiry::where('institution_id', $id)->whereJsonContains('course_enquiry', 'Graduation')->where('statuss', '>', 0)->count();
        $currentPost_Graduation = Enquiry::where('institution_id', $id)->whereJsonContains('course_enquiry', 'Post Graduation')->where('statuss', '>', 0)->count();
        $currentDoctorate = Enquiry::where('institution_id', $id)->whereJsonContains('course_enquiry', 'Doctorate')->where('statuss', '>', 0)->count();


        return view('providerProfile.institudeProfile')->with('institutions', $institutions)
            ->with('view', 'view')->with('img', $img)
            ->with('MembershipInstitutionDiploma', $MembershipInstitutionDiploma)
            ->with('MembershipInstitutionPG_Diploma', $MembershipInstitutionPG_Diploma)
            ->with('MembershipInstitutionCertification', $MembershipInstitutionCertification)
            ->with('MembershipInstitutionGraduation', $MembershipInstitutionGraduation)
            ->with('MembershipInstitutionPost_Graduation', $MembershipInstitutionPost_Graduation)
            ->with('MembershipInstitutionDoctorate', $MembershipInstitutionDoctorate)
            ->with('currentDiploma', $currentDiploma)
            ->with('currentPG_Diploma', $currentPG_Diploma)
            ->with('currentCertification', $currentCertification)
            ->with('currentGraduation', $currentGraduation)
            ->with('currentPost_Graduation', $currentPost_Graduation)
            ->with('currentDoctorate', $currentDoctorate);
    }
    public function schoolIndex(Request $request)
    {
        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'School')->select('institutions.*', 'users.img as img');
        if ($request->financial != '') {
            $institutions = $institutions->where('is_financial', $request->financial);
        }


        if ($request->course_type != '') {
            $institutions = $institutions->whereJsonContains('course_type',  $request->course_type);
        }
        $institutions = $institutions->get();
        
        $type = "School";
        return view('dashboard.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'School');
    }
    public function collegeIndex(Request $request)
    {
        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'College')->select('institutions.*', 'users.img as img');
        $type = "College";

        if ($request->financial != '') {
            $institutions = $institutions->where('is_financial', $request->financial);
        }

        if ($request->course_type != '') {
            $institutions = $institutions->whereJsonContains('course_type',  $request->course_type);
        }

        $institutions = $institutions->get();

        return view('dashboard.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'College');
    }
    public function universityIndex(Request $request)
    {
        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'University')->select('institutions.*', 'users.img as img');

        if ($request->financial != '') {
            $institutions = $institutions->where('is_financial', $request->financial);
        }
        if ($request->course_type != '') {
            $institutions = $institutions->whereJsonContains('course_type',  $request->course_type);
        }

        $institutions = $institutions->get();

        $type = "University";

        return view('dashboard.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'University');
    }
    public function rcicConsultantIndex()
    {
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'RCIC Consultant')->select('providers.*', 'users.img as img')->get();
        $type = "RCIC Consultant";
        return view('dashboard.consultant')->with('consultants', $consultants)->with('type', $type)->with('unique', 'RCIC Consultant');
    }
    public function immigrationIndex()
    {
        $type = "Immigration Lawyer/Attorney";
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'Immigration Lawyer/Attorney')->select('providers.*', 'users.img as img')->get();
        return view('dashboard.consultant')->with('consultants', $consultants)->with('type', $type)->with('unique', 'Immigration Lawyer/Attorney');
    }
}
