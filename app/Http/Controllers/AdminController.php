<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Institution;
use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;
use Illuminate\Support\Facades\DB;
use App\Models\Personal;
use App\Models\Academy;
use App\Models\Work;
use App\Models\Sponsor;
use App\Models\Qualification;
use Illuminate\Support\Facades\Auth;
use App\Models\TechnicalCertification;
use App\Models\Employment;
use App\Models\Calculator;
use App\Models\Education;
use App\Models\MembershipCandidate;
use App\Models\MembershipInstitution;
use App\Models\MembershipProvider;
use App\Models\Enquiry;



class AdminController extends Controller
{


    public function candidateIndex()
    {
        $candidates = Personal::join('users', 'users.id', 'candidate_personals.user_id')->select('candidate_personals.*', 'users.img as img')->get();

        return view('admin.candidate')->with('candidates', $candidates);
    }
    public function schoolIndex(Request $request)
    {
        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'School');
        if ($request->financial != '') {
            $institutions = $institutions->where('is_financial', $request->financial);
        }
        if ($request->course_type != '') {
            $institutions = $institutions->whereJsonContains('course_type',  $request->course_type);
        }
        $institutions = $institutions->select('institutions.*', 'users.img as img')->get();

        foreach ($institutions as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_institution_id');

            if ($limitedEnquiryId) {
                $limitedEnquiry =  MembershipInstitution::find($limitedEnquiryId);
                $limitedEnquirySchool = $limitedEnquiry->Enquiries;
            } else {
                $limitedEnquirySchool = '';
            }

            $currentEnquirySchool = Enquiry::where('institution_id', $row->id)->where('statuss', '>', 0)->count();

            $row->setAttribute('currentEnquirySchool', $currentEnquirySchool);
            $row->setAttribute('limitedEnquirySchool',  $limitedEnquirySchool);
        }

        $type = "School";


        return view('admin.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'School');
    }
    public function collegeIndex(Request $request)
    {
        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', 'College')->select('institutions.*', 'users.img as img');
        $type = "College";

        if ($request->financial != '') {
            $institutions = $institutions->whereJsonContains('course_type',  $request->course_type);
        }

        if ($request->course_type != '') {
        }

        $institutions = $institutions->get();

        foreach ($institutions as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_institution_id');

            if ($limitedEnquiryId) {
                $limitedEnquiry =  MembershipInstitution::find($limitedEnquiryId);
                $limitedEnquiryDiploma = $limitedEnquiry->Diploma;
                $limitedEnquiryPG_Diploma = $limitedEnquiry->PG_Diploma;
                $limitedEnquiryCertification = $limitedEnquiry->Certification;
            } else {
                $limitedEnquiryDiploma = '';
                $limitedEnquiryPG_Diploma = '';
                $limitedEnquiryCertification = '';
            }

            $currentDiploma = Enquiry::where('institution_id', $row->id)->whereJsonContains('course_enquiry', 'Diploma')->where('statuss', '>', 0)->count();
            $currentPG_Diploma = Enquiry::where('institution_id', $row->id)->whereJsonContains('course_enquiry', 'PG Diploma')->where('statuss', '>', 0)->count();
            $currentCertification = Enquiry::where('institution_id', $row->id)->whereJsonContains('course_enquiry', 'Certification')->where('statuss', '>', 0)->count();

            $row->setAttribute('limitedEnquiryDiploma', $limitedEnquiryDiploma);
            $row->setAttribute('limitedEnquiryPG_Diploma',  $limitedEnquiryPG_Diploma);
            $row->setAttribute('limitedEnquiryCertification', $limitedEnquiryCertification);
            $row->setAttribute('currentDiploma',  $currentDiploma);
            $row->setAttribute('currentPG_Diploma', $currentPG_Diploma);
            $row->setAttribute('currentCertification',  $currentCertification);
        }

        return view('admin.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'College');
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
        foreach ($institutions as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_institution_id');

            if ($limitedEnquiryId) {
                $limitedEnquiry =  MembershipInstitution::find($limitedEnquiryId);
                $limitedEnquiryGraduation = $limitedEnquiry->Graduation;
                $limitedEnquiryPost_Graduation = $limitedEnquiry->Post_Graduation;
                $limitedEnquiryDoctorate = $limitedEnquiry->Doctorate;
            } else {
                $limitedEnquiryGraduation = '';
                $limitedEnquiryPost_Graduation = '';
                $limitedEnquiryDoctorate = '';
            }

            $currentGraduation = Enquiry::where('institution_id',  $row->id)->whereJsonContains('course_enquiry', 'Graduation')->where('statuss', '>', 0)->count();
            $currentPost_Graduation = Enquiry::where('institution_id',  $row->id)->whereJsonContains('course_enquiry', 'Post Graduation')->where('statuss', '>', 0)->count();
            $currentDoctorate = Enquiry::where('institution_id',  $row->id)->whereJsonContains('course_enquiry', 'Doctorate')->where('statuss', '>', 0)->count();

            $row->setAttribute('limitedEnquiryGraduation', $limitedEnquiryGraduation);
            $row->setAttribute('limitedEnquiryPost_Graduation',  $limitedEnquiryPost_Graduation);
            $row->setAttribute('limitedEnquiryDoctorate', $limitedEnquiryDoctorate);
            $row->setAttribute('currentGraduation',  $currentGraduation);
            $row->setAttribute('currentPost_Graduation', $currentPost_Graduation);
            $row->setAttribute('currentDoctorate',  $currentDoctorate);
        }
        $type = "University";

        return view('admin.institution')->with('institutions', $institutions)->with('type', $type)->with('unique', 'University');
    }
    public function consultantIndex()
    {
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'RCIC Consultant')->select('providers.*', 'users.img as img')->get();
        $type = "RCIC Consultant";

        foreach ($consultants as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_provider_id');

            if ($limitedEnquiryId) {
                $limitedEnquiry =  MembershipProvider::find($limitedEnquiryId);
                $limitedEnquiryProvider = $limitedEnquiry->EnquiriesRCICConsultant;
            } else {
                $limitedEnquiryProvider = '';
            }

            $currentEnquiryProvider = Enquiry::where('provider_id', $row->id)->where('statuss', '>', 0)->count();

            $row->setAttribute('limitedEnquiryProvider', $limitedEnquiryProvider);
            $row->setAttribute('currentEnquiryProvider',  $currentEnquiryProvider);
        }

        return view('admin.consultant')->with('consultants', $consultants)->with('type', $type)->with('unique', 'RCIC Consultant');
    }
    public function immigrationIndex()
    {
        $type = "Immigration Lawyer/Attorney";
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'Immigration Lawyer/Attorney')->select('providers.*', 'users.img as img')->get();

        foreach ($consultants as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_provider_id');

            if ($limitedEnquiryId) {
                $limitedEnquiry =  MembershipProvider::find($limitedEnquiryId);
                $limitedEnquiryProvider = $limitedEnquiry->EnquiriesImmigration;
            } else {
                $limitedEnquiryProvider = '';
            }

            $currentEnquiryProvider = Enquiry::where('provider_id', $row->id)->where('statuss', '>', 0)->count();

            $row->setAttribute('limitedEnquiryProvider', $limitedEnquiryProvider);
            $row->setAttribute('currentEnquiryProvider',  $currentEnquiryProvider);
        }

        return view('admin.consultant')->with('consultants', $consultants)->with('type', $type)->with('unique', 'Immigration Lawyer/Attorney');
    }
    public function businessIndex()
    {
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', 'Chartered Accountant')->select('providers.*', 'users.img as img')->get();
        $type = "Chartered Accountant";

        foreach ($consultants as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_provider_id');

            if ($limitedEnquiryId) {
                $limitedEnquiry =  MembershipProvider::find($limitedEnquiryId);
                $limitedEnquiryProvider = $limitedEnquiry->EnquiriesBusiness;
            } else {
                $limitedEnquiryProvider = '';
            }

            $currentEnquiryProvider = Enquiry::where('provider_id', $row->id)->where('statuss', '>', 0)->count();

            $row->setAttribute('limitedEnquiryProvider', $limitedEnquiryProvider);
            $row->setAttribute('currentEnquiryProvider',  $currentEnquiryProvider);
        }

        return view('admin.business')->with('consultants', $consultants)->with('type', $type)->with('unique', '');
    }

    public function consultantView($id)
    {
        $consultants = Consultant::find($id);

        $user_id =  $consultants->user_id;
        $img = User::where('id', $user_id)->value('img');

        $teams = Team::where('provider_id', $consultants->id)->get();

        return view('admin.providerView.consultantProfile')->with('consultants', $consultants)->with('teams', $teams)->with('view', 'view')->with('img', $img);
    }
    public function businessView($id)
    {
        $consultants = Consultant::find($id);
        $teams = Team::where('provider_id', $consultants->id)->get();
        $user_id =  $consultants->user_id;
        $img = User::where('id', $user_id)->value('img');

        return view('admin.providerView.business')->with('consultants', $consultants)->with('teams', $teams)->with('view', 'view')->with('img', $img);
    }
    public function institutionView($id)
    {

        $institutions =  Institution::find($id);
        $user_id =  $institutions->user_id;
        $img = User::where('id', $user_id)->value('img');

        return view('admin.providerView.institudeProfile')->with('institutions', $institutions)->with('view', 'view')->with('img', $img);
    }
    public function candidateProfile($id)
    {

        $personal =  Personal::where('user_id', $id)->first();
        $Academy =  Academy::where('user_id', $id)->first();
        $Sponsor =  Sponsor::where('user_id', $id)->first();
        $Work =  Work::where('user_id', $id)->get();
        $image = User::where('id', $id)->value('img');
        $qualification = DB::table('candidate_academics')
            ->join('qualifications', 'qualifications.candidate_academic_id', '=', 'candidate_academics.id')
            ->where('candidate_academics.user_id', $id)
            ->get();


        return view('admin.candidateView.candidateProfile')
            ->with('personal', $personal)
            ->with('Academy', $Academy)
            ->with('Sponsor', $Sponsor)
            ->with('Work', $Work)
            ->with('image', $image)
            ->with('userId', $id)
            ->with('qualification', $qualification);
    }

    public function calculatorview($id)
    {
        $calculators =  Calculator::where('user_id', $id)->first();
        if ($calculators) {
            $employments = Employment::where('calculator_id', $calculators->id)->where('type', 'calculator')->get();
            $technicalCertifications = TechnicalCertification::where('calculator_id',  $calculators->id)->get();

            return view('admin.candidateView.calculatorview')->with('calculators', $calculators)->with('employments', $employments)->with('technicalCertifications', $technicalCertifications);
        } else {
            return redirect()->back()->with('alert1', 'There No Crs Calcultator Form');
        }
    }

    public function educationview($id)
    {

        $educations =  Education::where('user_id', $id)->first();
        if ($educations) {
            $employments = Employment::where('education_id',  $educations->id)->get();
            $technicalCertifications = TechnicalCertification::where('education_id',  $educations->id)->get();

            return view('admin.candidateView.educationview')->with('educations', $educations)->with('employments', $employments)->with('technicalCertifications', $technicalCertifications);
        } else {
            return redirect()->back()->with('alert2', 'There No Educational Assesment Form');
        }
    }
}
