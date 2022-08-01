<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution;
use App\Models\Consultant;
use App\Models\Enquiry;
use App\Models\Personal;
use Illuminate\Support\Facades\DB;

class EnquiryController extends Controller
{
    public function candidateRequest(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $statuss = $request->statuss;
        $course_enquiry = $request->course_enquiry;

        $type = $request->type;
        $PersonalId =  Personal::where('user_id', Auth::user()->id)->value('id');

        if ($type == 'institution') {
            $Enquiry =  Enquiry::where('institution_id', $id)->where('candidate_id',  $PersonalId)->first();
            if ($Enquiry) {
                $Enquiry->status = $status;
                $Enquiry->statuss  =  $statuss;
                $Enquiry->course_enquiry  =  $course_enquiry;
                $Enquiry->save();
            } else {
                $Enquiry =  new Enquiry;
                $Enquiry->candidate_id = $PersonalId;
                $Enquiry->institution_id  = $id;
                $Enquiry->status  =  $status;
                $Enquiry->statuss  =  $statuss;
                $Enquiry->course_enquiry  =  $course_enquiry;
                $Enquiry->save();
            }
        } else {

            $Enquiry =  Enquiry::where('provider_id', $id)->where('candidate_id', $PersonalId)->first();
            if ($Enquiry) {
                $Enquiry->status = $status;
                $Enquiry->statuss  =  $statuss;
                $Enquiry->save();
            } else {
                $Enquiry =  new Enquiry;
                $Enquiry->candidate_id = $PersonalId;
                $Enquiry->provider_id = $id;
                $Enquiry->status  =  $status;
                $Enquiry->statuss  =  $statuss;
                $Enquiry->save();
            }
        }
        return 1;
    }

    public function candidateEnquiry()
    {
        $candidate_id  =  Personal::where('user_id', Auth::user()->id)->value('id');


        $EnquiryInstitutionSchool =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 0)
            ->where('institutions.type', 'School')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();


        $EnquiryInstitutionCollege =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 0)
            ->where('institutions.type', 'College')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionUniversity =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 0)
            ->where('institutions.type', 'University')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionSchool1 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('institutions.type', 'School')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionCollege1 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('institutions.type', 'College')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionUniversity1 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('institutions.type', 'University')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionSchool2 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 2)
            ->where('institutions.type', 'School')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionCollege2 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 2)
            ->where('institutions.type', 'College')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionUniversity2 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 2)
            ->where('institutions.type', 'University')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();


        $EnquiryProviderConsultant =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 0)
            ->where('providers.type', 'RCIC Consultant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryProviderImmigration =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 0)
            ->where('providers.type', 'Immigration Lawyer/Attorney')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryProviderBusiness =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 0)
            ->where('providers.type', 'Chartered Accountant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryProviderConsultant1 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 1)
            ->where('providers.type', 'RCIC Consultant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryProviderImmigration1 =  Enquiry::join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.candidate_id', $candidate_id)
            ->where('enquiries.statuss', 1)
            ->where('providers.type', 'Immigration Lawyer/Attorney')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();



        $EnquiryProviderBusiness1 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 1)
            ->where('providers.type', 'Chartered Accountant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();


        $EnquiryProviderConsultant2 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 2)
            ->where('providers.type', 'RCIC Consultant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryProviderImmigration2 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 2)
            ->where('providers.type', 'Immigration Lawyer/Attorney')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryProviderBusiness2 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 2)
            ->where('providers.type', 'Chartered Accountant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryInstitutionSchoolSubstitude =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->where('institutions.type', 'School')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->first();

        $EnquiryInstitutionCollegeSubstitude =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->where('institutions.type', 'College')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->first();

        $EnquiryInstitutionUniversitySubstitude =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->where('institutions.type', 'University')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->first();

        $EnquiryProviderConsultantSubstitude =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->where('providers.type', 'RCIC Consultant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->first();

        $EnquiryProviderImmigrationSubstitude =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->where('providers.type', 'Immigration Lawyer/Attorney')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->first();

        $EnquiryProviderBusinessSubstitude =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->where('providers.type', 'Chartered Accountant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->first();


        return view('enquiry.candidate')
            ->with('EnquiryInstitutionSchool', $EnquiryInstitutionSchool)
            ->with('EnquiryInstitutionSchool1', $EnquiryInstitutionSchool1)
            ->with('EnquiryInstitutionSchool2', $EnquiryInstitutionSchool2)

            ->with('EnquiryInstitutionCollege', $EnquiryInstitutionCollege)
            ->with('EnquiryInstitutionCollege1', $EnquiryInstitutionCollege1)
            ->with('EnquiryInstitutionCollege2', $EnquiryInstitutionCollege2)

            ->with('EnquiryInstitutionUniversity', $EnquiryInstitutionUniversity)
            ->with('EnquiryInstitutionUniversity1', $EnquiryInstitutionUniversity1)
            ->with('EnquiryInstitutionUniversity2', $EnquiryInstitutionUniversity2)

            ->with('EnquiryProviderBusiness', $EnquiryProviderBusiness)
            ->with('EnquiryProviderImmigration', $EnquiryProviderImmigration)
            ->with('EnquiryProviderConsultant', $EnquiryProviderConsultant)

            ->with('EnquiryProviderBusiness1', $EnquiryProviderBusiness1)
            ->with('EnquiryProviderImmigration1', $EnquiryProviderImmigration1)
            ->with('EnquiryProviderConsultant1', $EnquiryProviderConsultant1)

            ->with('EnquiryProviderBusiness2', $EnquiryProviderBusiness2)
            ->with('EnquiryProviderImmigration2', $EnquiryProviderImmigration2)
            ->with('EnquiryProviderConsultant2', $EnquiryProviderConsultant2)

            ->with('EnquiryInstitutionSchoolSubstitude', $EnquiryInstitutionSchoolSubstitude)
            ->with('EnquiryInstitutionCollegeSubstitude', $EnquiryInstitutionCollegeSubstitude)
            ->with('EnquiryInstitutionUniversitySubstitude', $EnquiryInstitutionUniversitySubstitude)

            ->with('EnquiryProviderConsultantSubstitude', $EnquiryProviderConsultantSubstitude)
            ->with('EnquiryProviderImmigrationSubstitude', $EnquiryProviderImmigrationSubstitude)
            ->with('EnquiryProviderBusinessSubstitude', $EnquiryProviderBusinessSubstitude);
    }

    public function providerEnquiry($id)
    {

        if ($id == 'Institution') {
            $institutionId =   Institution::where('user_id', Auth::user()->id)->value('id');

            $EnquiryCandidate =   Enquiry::where('institution_id',  $institutionId)
                ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
                ->join('users', 'users.id', 'candidate_personals.user_id')
                ->where('enquiries.statuss', 0)
                ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
                ->get();

            $EnquiryCandidate2 =   Enquiry::where('institution_id',  $institutionId)
                ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
                ->join('users', 'users.id', 'candidate_personals.user_id')
                ->where('enquiries.statuss', 2)
                ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
                ->get();

            $EnquiryCandidatesubstitude =   Enquiry::where('institution_id',  $institutionId)
                ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
                ->join('users', 'users.id', 'candidate_personals.user_id')
                ->where('enquiries.statuss', 1)
                ->where('enquiries.is_forward', 2)
                ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
                ->get();

            return view('enquiry.institude')
                ->with('EnquiryCandidate', $EnquiryCandidate)
                ->with('EnquiryCandidate2', $EnquiryCandidate2)
                ->with('EnquiryCandidatesubstitude', $EnquiryCandidatesubstitude);
        } else {
            $consultantId =   Consultant::where('user_id', Auth::user()->id)->value('id');


            $EnquiryCandidate =   Enquiry::where('provider_id',  $consultantId)
                ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
                ->join('users', 'users.id', 'candidate_personals.user_id')
                ->where('enquiries.statuss', 0)
                ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
                ->get();

            $EnquiryCandidate2 =   Enquiry::where('provider_id',  $consultantId)
                ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
                ->join('users', 'users.id', 'candidate_personals.user_id')
                ->where('enquiries.statuss', 2)
                ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
                ->get();

            $EnquiryCandidatesubstitude =   Enquiry::where('provider_id',  $consultantId)
                ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
                ->join('users', 'users.id', 'candidate_personals.user_id')
                ->where('enquiries.statuss', 1)
                ->where('enquiries.is_forward', 2)
                ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
                ->get();


            return view('enquiry.consultant')
                ->with('EnquiryCandidate', $EnquiryCandidate)
                ->with('EnquiryCandidate2', $EnquiryCandidate2)
                ->with('EnquiryCandidatesubstitude', $EnquiryCandidatesubstitude);
        }
    }
}
