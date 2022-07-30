<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution;
use App\Models\Consultant;
use App\Models\Enquiry;
use App\Models\Personal;
use App\Models\Academy;
use App\Models\Work;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;
use App\Models\MembershipCandidate;
use App\Models\MembershipInstitution;
use App\Models\MembershipProvider;
use App\Models\User;


class AdminEnquiryController extends Controller
{
    public function candidateEnquiry($id)
    {
        $candidate_id  = $id;

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
            ->where('enquiries.is_forward', 0)
            ->where('institutions.type', 'School')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionCollege1 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 0)
            ->where('institutions.type', 'College')
            ->select('institutions.*',  'enquiries.*', 'users.img as img', 'institutions.id as serviceId')
            ->get();

        $EnquiryInstitutionUniversity1 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 0)
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
            ->where('enquiries.is_forward', 0)
            ->where('providers.type', 'RCIC Consultant')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();

        $EnquiryProviderImmigration1 =  Enquiry::join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.candidate_id', $candidate_id)
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 0)
            ->where('providers.type', 'Immigration Lawyer/Attorney')
            ->select('providers.*', 'enquiries.*', 'users.img as img', 'providers.id as serviceId')
            ->get();


        $EnquiryProviderBusiness1 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 0)
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

        $candidates = Personal::find($candidate_id);
        $limitedEnquiryId =   User::where('id', $candidates->user_id)->value('membership_plan_id');


        if ($limitedEnquiryId) {
            $MembershipCandidate  =  MembershipCandidate::find($limitedEnquiryId);

            $MembershipCandidateEnquiriesSchool =  $MembershipCandidate->EnquiriesSchool;
            $MembershipCandidateEnquiriesUniversity =  $MembershipCandidate->EnquiriesUniversity;
            $MembershipCandidateEnquiriesCollege =  $MembershipCandidate->EnquiriesCollege;
            $MembershipCandidateEnquiriesRCICConsultant =  $MembershipCandidate->EnquiriesRCICConsultant;
            $MembershipCandidateEnquiriesImmigration =  $MembershipCandidate->EnquiriesImmigration;
            $MembershipCandidateEnquiriesBusiness =  $MembershipCandidate->EnquiriesBusiness;
        } else {
            $MembershipCandidateEnquiriesSchool = '';
            $MembershipCandidateEnquiriesUniversity = '';
            $MembershipCandidateEnquiriesCollege =  '';
            $MembershipCandidateEnquiriesRCICConsultant = '';
            $MembershipCandidateEnquiriesImmigration = '';
            $MembershipCandidateEnquiriesBusiness = '';
        }


        $currentEnquirySchool  = Enquiry::where('candidate_id', $candidates->id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->where('enquiries.statuss', '>', 0)
            ->where('institutions.type', 'School')
            ->count();

        $currentEnquiryCollege  = Enquiry::where('candidate_id', $candidates->id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->where('enquiries.statuss', '>', 0)
            ->where('institutions.type', 'College')
            ->count();

        $currentEnquiryUniversity  = Enquiry::where('candidate_id', $candidates->id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->where('enquiries.statuss', '>', 0)
            ->where('institutions.type', 'University')
            ->count();

        $currentEnquiryConsultant  = Enquiry::where('candidate_id', $candidates->id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->where('enquiries.statuss', '>', 0)
            ->where('providers.type', 'RCIC Consultant')
            ->count();

        $currentEnquiryImmigration  = Enquiry::where('candidate_id', $candidates->id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->where('enquiries.statuss', '>', 0)
            ->where('providers.type', 'Immigration Lawyer/Attorney')
            ->count();

        $currentEnquiryAccountant = Enquiry::where('candidate_id', $candidates->id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->where('enquiries.statuss', '>', 0)
            ->where('providers.type', 'Chartered Accountant')
            ->count();

        $candidates->setAttribute('MembershipCandidateEnquiriesSchool',  $MembershipCandidateEnquiriesSchool);
        $candidates->setAttribute('MembershipCandidateEnquiriesCollege',  $MembershipCandidateEnquiriesCollege);
        $candidates->setAttribute('MembershipCandidateEnquiriesUniversity', $MembershipCandidateEnquiriesUniversity);
        $candidates->setAttribute('MembershipCandidateEnquiriesRCICConsultant',  $MembershipCandidateEnquiriesRCICConsultant);
        $candidates->setAttribute('MembershipCandidateEnquiriesImmigration', $MembershipCandidateEnquiriesImmigration);
        $candidates->setAttribute('MembershipCandidateEnquiriesBusiness',  $MembershipCandidateEnquiriesBusiness);
        $candidates->setAttribute('currentEnquirySchool', $currentEnquirySchool);
        $candidates->setAttribute('currentEnquiryCollege',  $currentEnquiryCollege);
        $candidates->setAttribute('currentEnquiryUniversity', $currentEnquiryUniversity);
        $candidates->setAttribute('currentEnquiryConsultant',  $currentEnquiryConsultant);
        $candidates->setAttribute('currentEnquiryImmigration', $currentEnquiryImmigration);
        $candidates->setAttribute('currentEnquiryAccountant',  $currentEnquiryAccountant);
        // return $EnquiryInstitutionCollegeSubstitude;

        foreach ($EnquiryInstitutionSchool1  as $row) {

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

        foreach ($EnquiryInstitutionCollege1 as $row) {
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

        foreach ($EnquiryInstitutionUniversity1 as $row) {
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

        foreach ($EnquiryProviderConsultant1 as $row) {
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

        foreach ($EnquiryProviderImmigration1 as $row) {
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

        foreach ($EnquiryProviderBusiness1 as $row) {
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

        return view('admin.enquiry.candidate')
            ->with('candidates', $candidates)
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

    public function institudeEnquiry($id)
    {

        $EnquiryCandidate =   Enquiry::where('institution_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 0)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        $EnquiryCandidate1 =   Enquiry::where('institution_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 0)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        $EnquiryCandidate2 =   Enquiry::where('institution_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 2)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        $EnquiryCandidatesubstitude =   Enquiry::where('institution_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        $institutions = Institution::find($id);
        if ($institutions->type = 'School') {

            $limitedEnquiryId =   User::where('id', $institutions->user_id)->value('membership_institution_id');

            if ($limitedEnquiryId) {
                $limitedEnquiry =  MembershipInstitution::find($limitedEnquiryId);
                $limitedEnquirySchool = $limitedEnquiry->Enquiries;
            } else {
                $limitedEnquirySchool = '';
            }

            $currentEnquirySchool = Enquiry::where('institution_id', $institutions->id)->where('statuss', '>', 0)->count();

            $institutions->setAttribute('currentEnquirySchool', $currentEnquirySchool);
            $institutions->setAttribute('limitedEnquirySchool',  $limitedEnquirySchool);
        } else if ($institutions->type = 'College') {

            $limitedEnquiryId =   User::where('id', $institutions->user_id)->value('membership_institution_id');

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

            $currentDiploma = Enquiry::where('institution_id', $institutions->id)->whereJsonContains('course_enquiry', 'Diploma')->where('statuss', '>', 0)->count();
            $currentPG_Diploma = Enquiry::where('institution_id', $institutions->id)->whereJsonContains('course_enquiry', 'PG Diploma')->where('statuss', '>', 0)->count();
            $currentCertification = Enquiry::where('institution_id', $institutions->id)->whereJsonContains('course_enquiry', 'Certification')->where('statuss', '>', 0)->count();

            $institutions->setAttribute('limitedEnquiryDiploma', $limitedEnquiryDiploma);
            $institutions->setAttribute('limitedEnquiryPG_Diploma',  $limitedEnquiryPG_Diploma);
            $institutions->setAttribute('limitedEnquiryCertification', $limitedEnquiryCertification);
            $institutions->setAttribute('currentDiploma',  $currentDiploma);
            $institutions->setAttribute('currentPG_Diploma', $currentPG_Diploma);
            $institutions->setAttribute('currentCertification',  $currentCertification);
        } else {


            $limitedEnquiryId =   User::where('id', $institutions->user_id)->value('membership_institution_id');

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

            $currentGraduation = Enquiry::where('institution_id',  $institutions->id)->whereJsonContains('course_enquiry', 'Graduation')->where('statuss', '>', 0)->count();
            $currentPost_Graduation = Enquiry::where('institution_id',  $institutions->id)->whereJsonContains('course_enquiry', 'Post Graduation')->where('statuss', '>', 0)->count();
            $currentDoctorate = Enquiry::where('institution_id',  $institutions->id)->whereJsonContains('course_enquiry', 'Doctorate')->where('statuss', '>', 0)->count();

            $institutions->setAttribute('limitedEnquiryGraduation', $limitedEnquiryGraduation);
            $institutions->setAttribute('limitedEnquiryPost_Graduation',  $limitedEnquiryPost_Graduation);
            $institutions->setAttribute('limitedEnquiryDoctorate', $limitedEnquiryDoctorate);
            $institutions->setAttribute('currentGraduation',  $currentGraduation);
            $institutions->setAttribute('currentPost_Graduation', $currentPost_Graduation);
            $institutions->setAttribute('currentDoctorate',  $currentDoctorate);
        }

        foreach ($EnquiryCandidate1 as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_plan_id');


            if ($limitedEnquiryId) {
                $MembershipCandidate  =  MembershipCandidate::find($limitedEnquiryId);

                $MembershipCandidateEnquiriesSchool =  $MembershipCandidate->EnquiriesSchool;
                $MembershipCandidateEnquiriesUniversity =  $MembershipCandidate->EnquiriesUniversity;
                $MembershipCandidateEnquiriesCollege =  $MembershipCandidate->EnquiriesCollege;
                $MembershipCandidateEnquiriesRCICConsultant =  $MembershipCandidate->EnquiriesRCICConsultant;
                $MembershipCandidateEnquiriesImmigration =  $MembershipCandidate->EnquiriesImmigration;
                $MembershipCandidateEnquiriesBusiness =  $MembershipCandidate->EnquiriesBusiness;
            } else {
                $MembershipCandidateEnquiriesSchool = '';
                $MembershipCandidateEnquiriesUniversity = '';
                $MembershipCandidateEnquiriesCollege =  '';
                $MembershipCandidateEnquiriesRCICConsultant = '';
                $MembershipCandidateEnquiriesImmigration = '';
                $MembershipCandidateEnquiriesBusiness = '';
            }


            $currentEnquirySchool  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'School')
                ->count();

            $currentEnquiryCollege  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'College')
                ->count();

            $currentEnquiryUniversity  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'University')
                ->count();

            $currentEnquiryConsultant  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'RCIC Consultant')
                ->count();

            $currentEnquiryImmigration  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'Immigration Lawyer/Attorney')
                ->count();

            $currentEnquiryAccountant = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'Chartered Accountant')
                ->count();

            $row->setAttribute('MembershipCandidateEnquiriesSchool',  $MembershipCandidateEnquiriesSchool);
            $row->setAttribute('MembershipCandidateEnquiriesCollege',  $MembershipCandidateEnquiriesCollege);
            $row->setAttribute('MembershipCandidateEnquiriesUniversity', $MembershipCandidateEnquiriesUniversity);
            $row->setAttribute('MembershipCandidateEnquiriesRCICConsultant',  $MembershipCandidateEnquiriesRCICConsultant);
            $row->setAttribute('MembershipCandidateEnquiriesImmigration', $MembershipCandidateEnquiriesImmigration);
            $row->setAttribute('MembershipCandidateEnquiriesBusiness',  $MembershipCandidateEnquiriesBusiness);
            $row->setAttribute('currentEnquirySchool', $currentEnquirySchool);
            $row->setAttribute('currentEnquiryCollege',  $currentEnquiryCollege);
            $row->setAttribute('currentEnquiryUniversity', $currentEnquiryUniversity);
            $row->setAttribute('currentEnquiryConsultant',  $currentEnquiryConsultant);
            $row->setAttribute('currentEnquiryImmigration', $currentEnquiryImmigration);
            $row->setAttribute('currentEnquiryAccountant',  $currentEnquiryAccountant);
        }

        return view('admin.enquiry.institude')
            ->with('EnquiryCandidate', $EnquiryCandidate)
            ->with('EnquiryCandidate1', $EnquiryCandidate1)
            ->with('EnquiryCandidate2', $EnquiryCandidate2)
            ->with('EnquiryCandidatesubstitude', $EnquiryCandidatesubstitude)
            ->with('institutions', $institutions);
    }

    public function consultantEnquiry($id)
    {

        $EnquiryCandidate =   Enquiry::where('provider_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 0)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        $EnquiryCandidate1 =   Enquiry::where('provider_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 0)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();
        $EnquiryCandidate2 =   Enquiry::where('provider_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 2)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        $EnquiryCandidatesubstitude =   Enquiry::where('provider_id',  $id)
            ->join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', 1)
            ->where('enquiries.is_forward', 2)
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        $consultants = Consultant::find($id);


        foreach ($EnquiryCandidate1 as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_plan_id');


            if ($limitedEnquiryId) {
                $MembershipCandidate  =  MembershipCandidate::find($limitedEnquiryId);

                $MembershipCandidateEnquiriesSchool =  $MembershipCandidate->EnquiriesSchool;
                $MembershipCandidateEnquiriesUniversity =  $MembershipCandidate->EnquiriesUniversity;
                $MembershipCandidateEnquiriesCollege =  $MembershipCandidate->EnquiriesCollege;
                $MembershipCandidateEnquiriesRCICConsultant =  $MembershipCandidate->EnquiriesRCICConsultant;
                $MembershipCandidateEnquiriesImmigration =  $MembershipCandidate->EnquiriesImmigration;
                $MembershipCandidateEnquiriesBusiness =  $MembershipCandidate->EnquiriesBusiness;
            } else {
                $MembershipCandidateEnquiriesSchool = '';
                $MembershipCandidateEnquiriesUniversity = '';
                $MembershipCandidateEnquiriesCollege =  '';
                $MembershipCandidateEnquiriesRCICConsultant = '';
                $MembershipCandidateEnquiriesImmigration = '';
                $MembershipCandidateEnquiriesBusiness = '';
            }


            $currentEnquirySchool  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'School')
                ->count();

            $currentEnquiryCollege  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'College')
                ->count();

            $currentEnquiryUniversity  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'University')
                ->count();

            $currentEnquiryConsultant  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'RCIC Consultant')
                ->count();

            $currentEnquiryImmigration  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'Immigration Lawyer/Attorney')
                ->count();

            $currentEnquiryAccountant = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'Chartered Accountant')
                ->count();

            $row->setAttribute('MembershipCandidateEnquiriesSchool',  $MembershipCandidateEnquiriesSchool);
            $row->setAttribute('MembershipCandidateEnquiriesCollege',  $MembershipCandidateEnquiriesCollege);
            $row->setAttribute('MembershipCandidateEnquiriesUniversity', $MembershipCandidateEnquiriesUniversity);
            $row->setAttribute('MembershipCandidateEnquiriesRCICConsultant',  $MembershipCandidateEnquiriesRCICConsultant);
            $row->setAttribute('MembershipCandidateEnquiriesImmigration', $MembershipCandidateEnquiriesImmigration);
            $row->setAttribute('MembershipCandidateEnquiriesBusiness',  $MembershipCandidateEnquiriesBusiness);
            $row->setAttribute('currentEnquirySchool', $currentEnquirySchool);
            $row->setAttribute('currentEnquiryCollege',  $currentEnquiryCollege);
            $row->setAttribute('currentEnquiryUniversity', $currentEnquiryUniversity);
            $row->setAttribute('currentEnquiryConsultant',  $currentEnquiryConsultant);
            $row->setAttribute('currentEnquiryImmigration', $currentEnquiryImmigration);
            $row->setAttribute('currentEnquiryAccountant',  $currentEnquiryAccountant);
        }


        $limitedEnquiryId =   User::where('id', $consultants->user_id)->value('membership_provider_id');

        if ($limitedEnquiryId) {
            $limitedEnquiry =  MembershipProvider::find($limitedEnquiryId);
            $limitedEnquiryProvider = $limitedEnquiry->EnquiriesRCICConsultant;
        } else {
            $limitedEnquiryProvider = '';
        }

        $currentEnquiryProvider = Enquiry::where('provider_id', $consultants->id)->where('statuss', '>', 0)->count();

        $consultants->setAttribute('limitedEnquiryProvider', $limitedEnquiryProvider);
        $consultants->setAttribute('currentEnquiryProvider',  $currentEnquiryProvider);


        return view('admin.enquiry.consultant')
            ->with('EnquiryCandidate', $EnquiryCandidate)
            ->with('EnquiryCandidate1', $EnquiryCandidate1)
            ->with('EnquiryCandidate2', $EnquiryCandidate2)
            ->with('EnquiryCandidatesubstitude', $EnquiryCandidatesubstitude)
            ->with('consultants', $consultants);
    }

    public function candidatesList()
    {
        $candidatesList =   Enquiry::join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->groupBy('enquiries.candidate_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*')
            ->get();

        foreach ($candidatesList as $row) {
            $limitedEnquiryId =   User::where('id', $row->user_id)->value('membership_plan_id');


            if ($limitedEnquiryId) {
                $MembershipCandidate  =  MembershipCandidate::find($limitedEnquiryId);

                $MembershipCandidateEnquiriesSchool =  $MembershipCandidate->EnquiriesSchool;
                $MembershipCandidateEnquiriesUniversity =  $MembershipCandidate->EnquiriesUniversity;
                $MembershipCandidateEnquiriesCollege =  $MembershipCandidate->EnquiriesCollege;
                $MembershipCandidateEnquiriesRCICConsultant =  $MembershipCandidate->EnquiriesRCICConsultant;
                $MembershipCandidateEnquiriesImmigration =  $MembershipCandidate->EnquiriesImmigration;
                $MembershipCandidateEnquiriesBusiness =  $MembershipCandidate->EnquiriesBusiness;
            } else {
                $MembershipCandidateEnquiriesSchool = '';
                $MembershipCandidateEnquiriesUniversity = '';
                $MembershipCandidateEnquiriesCollege =  '';
                $MembershipCandidateEnquiriesRCICConsultant = '';
                $MembershipCandidateEnquiriesImmigration = '';
                $MembershipCandidateEnquiriesBusiness = '';
            }


            $currentEnquirySchool  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'School')
                ->count();

            $currentEnquiryCollege  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'College')
                ->count();

            $currentEnquiryUniversity  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                ->where('enquiries.statuss', '>', 0)
                ->where('institutions.type', 'University')
                ->count();

            $currentEnquiryConsultant  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'RCIC Consultant')
                ->count();

            $currentEnquiryImmigration  = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'Immigration Lawyer/Attorney')
                ->count();

            $currentEnquiryAccountant = Enquiry::where('candidate_id', $row->candidate_personalsId)
                ->join('providers', 'providers.id', 'enquiries.provider_id',)
                ->where('enquiries.statuss', '>', 0)
                ->where('providers.type', 'Chartered Accountant')
                ->count();

            $row->setAttribute('MembershipCandidateEnquiriesSchool',  $MembershipCandidateEnquiriesSchool);
            $row->setAttribute('MembershipCandidateEnquiriesCollege',  $MembershipCandidateEnquiriesCollege);
            $row->setAttribute('MembershipCandidateEnquiriesUniversity', $MembershipCandidateEnquiriesUniversity);
            $row->setAttribute('MembershipCandidateEnquiriesRCICConsultant',  $MembershipCandidateEnquiriesRCICConsultant);
            $row->setAttribute('MembershipCandidateEnquiriesImmigration', $MembershipCandidateEnquiriesImmigration);
            $row->setAttribute('MembershipCandidateEnquiriesBusiness',  $MembershipCandidateEnquiriesBusiness);
            $row->setAttribute('currentEnquirySchool', $currentEnquirySchool);
            $row->setAttribute('currentEnquiryCollege',  $currentEnquiryCollege);
            $row->setAttribute('currentEnquiryUniversity', $currentEnquiryUniversity);
            $row->setAttribute('currentEnquiryConsultant',  $currentEnquiryConsultant);
            $row->setAttribute('currentEnquiryImmigration', $currentEnquiryImmigration);
            $row->setAttribute('currentEnquiryAccountant',  $currentEnquiryAccountant);
        }


        return view('admin.enquiry.requestCandidate')
            ->with('candidatesList', $candidatesList);
    }

    public function schoolList()
    {
        $institutions  =  Enquiry::join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->where('institutions.type', 'School')
            ->groupBy('enquiries.institution_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'institutions.id as institutionsId', 'institutions.*')
            ->get();

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
        $type = 'School';
        return view('admin.enquiry.serviceInstitude')
            ->with('type', $type)
            ->with('institutions', $institutions);
    }
    public function collegeList()
    {
        $institutions  =  Enquiry::join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->where('institutions.type', 'College')
            ->groupBy('enquiries.institution_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'institutions.id as institutionsId', 'institutions.*')
            ->get();

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

        $type = 'College';
        return view('admin.enquiry.serviceInstitude')
            ->with('type', $type)
            ->with('institutions', $institutions);
    }
    public function universityList()
    {
        $institutions  =  Enquiry::join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->where('institutions.type', 'University')
            ->groupBy('enquiries.institution_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'institutions.id as institutionsId', 'institutions.*')
            ->get();

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

        $type = 'University';
        return view('admin.enquiry.serviceInstitude')
            ->with('type', $type)
            ->with('institutions', $institutions);
    }
    public function consultantList()
    {
        $consultants  =  Enquiry::join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->where('providers.type', '=', 'RCIC Consultant')
            ->groupBy('enquiries.provider_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'providers.id as providersId', 'providers.*')
            ->get();

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

        $type = 'RCIC Consultant';
        return view('admin.enquiry.serviceConsultant')
            ->with('type', $type)
            ->with('consultants', $consultants);
    }
    public function immigrationList()
    {
        $consultants  =  Enquiry::join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->Where('providers.type', '=', 'Immigration Lawyer/Attorney')
            ->groupBy('enquiries.provider_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'providers.id as providersId', 'providers.*')
            ->get();

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

        $type = 'Immigration Lawyer/Attorney';
        return view('admin.enquiry.serviceConsultant')
            ->with('type', $type)
            ->with('consultants', $consultants);
    }
    public function businessList()
    {
        $consultants  =  Enquiry::join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->where('providers.type', "Chartered Accountant")
            ->groupBy('enquiries.provider_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'providers.id as providersId', 'providers.*')
            ->get();

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

        $type = 'Chartered Accountant';
        return view('admin.enquiry.serviceBusiness')
            ->with('type', $type)
            ->with('consultants', $consultants);
    }
}
