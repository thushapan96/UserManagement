<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution;
use App\Models\Consultant;
use App\Models\Enquiry;
use App\Models\TechnicalCertification;
use App\Models\Employment;
use App\Models\Calculator;
use App\Models\Education;
use App\Models\Personal;
use App\Models\MembershipCandidate;
use App\Models\MembershipInstitution;
use App\Models\MembershipProvider;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function candidateSearch(Request $request)
    {
        $search = $request->search;
        $searchType = $request->searchType;
        $consultants = Personal::join('users', 'users.id', 'candidate_personals.user_id')->select('candidate_personals.*', 'users.img as img');

        if ($searchType == 'first_name') {
            $consultants = $consultants->where('first_name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'phone') {
            $consultants = $consultants->where('phone', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Country') {
            $consultants = $consultants->where('residential_country', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Province') {
            $consultants = $consultants->where('residential_region', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'City') {
            $consultants = $consultants->where('residential_city', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'immigration_purpose') {
            $consultants = $consultants->where('immigration_purpose', 'like', '%' . $search . '%')->get();
        }

        return json_encode($consultants);
    }

    public function candidateEnquirySearch(Request $request)
    {
        $search = $request->search;
        $searchType = $request->searchType;
        $candidatesList =   Enquiry::join('candidate_personals', 'candidate_personals.id', 'enquiries.candidate_id')
            ->join('users', 'users.id', 'candidate_personals.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->groupBy('enquiries.candidate_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'candidate_personals.id as candidate_personalsId', 'candidate_personals.*');

        if ($searchType == 'first_name') {
            $candidatesList = $candidatesList->where('first_name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'phone') {
            $candidatesList = $candidatesList->where('phone', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'immigration_purpose') {
            $candidatesList = $candidatesList->where('immigration_purpose', 'like', '%' . $search . '%')->get();
        }

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



        return json_encode($candidatesList);
    }
    public function providerSearch(Request $request)
    {
        $search = $request->search;
        $type = $request->type;
        $searchType = $request->searchType;
        $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type', $type)
            ->select('providers.*', 'users.img as img');

        if ($searchType == 'RCIC Number') {
            $consultants = $consultants->where('registration_number', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Company Name') {
            $consultants = $consultants->where('company_name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Country') {
            $consultants = $consultants->where('country', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Province') {
            $consultants = $consultants->where('region', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'City') {
            $consultants = $consultants->where('city', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Specialization') {
            $consultants = $consultants->where('specialization', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Service Type') {
            $consultants = $consultants->where('offering_service', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Owner Name') {
            $consultants = $consultants->where('first_name', 'like', '%' . $search . '%')->get();
        }

        if ($type == 'RCIC Consultant') {
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
        } else if ($type == 'Immigration Lawyer/Attorney') {
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
        } else {
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
        }

        return json_encode($consultants);
    }

    public function institudeSearch(Request $request)
    {
        $search = $request->search;
        $type =  $request->type;
        $searchType = $request->searchType;
        $course_type = $request->course_type;
        $financial = $request->financial;

        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', $type)->select('institutions.*', 'users.img as img');
        if ($financial != '') {
            $institutions = $institutions->where('is_financial', $financial);
        }
        if ($course_type != '') {
            // $institutions = $institutions->where('course_type', $course_type);
        }
        if ($searchType == 'Name') {
            $institutions = $institutions->where('name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Neighborhood') {
            $city = $institutions->where('name', 'like', '%' . $search . '%')->value('city');
            $institutions   = $institutions->where('city', $city)->get();
        } elseif ($searchType == 'Courses') {
            $institutions = $institutions->where('offer_course', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Course Type') {
            $institutions = $institutions->where('course_type', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'City') {
            $institutions = $institutions->where('city', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Province') {
            $institutions = $institutions->where('region', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Country') {
            $institutions = $institutions->where('country', 'like', '%' . $search . '%')->get();
        }


        if ($type == 'School') {
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
        } else if ($type == 'College') {
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
        } else {
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
        }

        return json_encode($institutions);
    }

    public function providerEnquirySearch(Request $request)
    {
        $search = $request->search;
        $type = $request->type;
        $searchType = $request->searchType;
        $consultants = $consultants  =  Enquiry::join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->Where('providers.type', '=',   $type)
            ->groupBy('enquiries.provider_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'providers.id as providersId', 'providers.*');

        if ($searchType == 'RCIC Number') {
            $consultants = $consultants->where('registration_number', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Company Name') {
            $consultants = $consultants->where('company_name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Country') {
            $consultants = $consultants->where('country', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Province') {
            $consultants = $consultants->where('region', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'City') {
            $consultants = $consultants->where('city', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Specialization') {
            $consultants = $consultants->where('specialization', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Service Type') {
            $consultants = $consultants->where('offering_service', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Owner Name') {
            $consultants = $consultants->where('first_name', 'like', '%' . $search . '%')->get();
        }


        if ($type == 'RCIC Consultant') {
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
        } else if ($type == 'Immigration Lawyer/Attorney') {
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
        } else {
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
        }
        return json_encode($consultants);
    }

    public function institudeEnquirySearch(Request $request)
    {
        $search = $request->search;
        $type =  $request->type;
        $searchType = $request->searchType;
        $course_type = $request->course_type;
        $financial = $request->financial;

        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->where('type', $type)->select('institutions.*', 'users.img as img');

        $institutions  =  Enquiry::join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', '!=', 2)
            ->where('institutions.type',  $type)
            ->groupBy('enquiries.institution_id')
            ->select('enquiries.*', 'users.img as img', 'enquiries.id as enquiriesId', 'institutions.id as institutionsId', 'institutions.*');

        if ($financial != '') {
            $institutions = $institutions->where('is_financial', $financial);
        }
        if ($course_type != '') {
            // $institutions = $institutions->where('course_type', $course_type);
        }
        if ($searchType == 'Name') {
            $institutions = $institutions->where('name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Neighborhood') {
            $city = $institutions->where('name', 'like', '%' . $search . '%')->value('city');
            $institutions   = $institutions->where('city', $city)->get();
        } elseif ($searchType == 'Courses') {
            $institutions = $institutions->where('offer_course', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Course Type') {
            $institutions = $institutions->where('course_type', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'City') {
            $institutions = $institutions->where('city', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Province') {
            $institutions = $institutions->where('region', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Country') {
            $institutions = $institutions->where('country', 'like', '%' . $search . '%')->get();
        }

        if ($type == 'School') {
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
        } else if ($type == 'College') {
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
        } else {
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
        }

        return json_encode($institutions);
    }

    public function confirmEnquiry(Request $request)
    {
        $type = $request->type;
        $candidatesId = $request->candidatesId;
        $serviceId = $request->serviceId;
        $description = $request->description;


        if ($type == 'School' || $type == 'College' || $type == 'University') {
            if ($request->new) {
                if (Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->first()) {
                    Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('institutions.type', $type)->update([
                        'is_forward' => 1
                    ]);

                    Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                        'is_forward' => 2,
                        'description' =>  $description,
                    ]);

                    return 1;
                } else {
                    $Enquiry = new Enquiry;
                    $Enquiry->candidate_id = $candidatesId;
                    $Enquiry->institution_id  = $serviceId;
                    $Enquiry->status = 'Request';
                    $Enquiry->statuss = 1;
                    $Enquiry->is_forward  = 2;

                    $Enquiry->save();

                    Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('institutions.type', $type)->update([
                        'is_forward' => 1
                    ]);

                    Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                        'is_forward' => 2,
                        'description' =>  $description,
                    ]);

                    return 1;
                }
            } else {
                Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('institutions.type', $type)->update([
                    'is_forward' => 1
                ]);

                Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                    'is_forward' => 2,
                    'description' =>  $description,
                ]);

                return 1;
            }
        } else {

            if ($request->new) {
                if (Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->first()) {
                    Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('providers.type', $type)->update([
                        'is_forward' => 1
                    ]);

                    Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->update([
                        'is_forward' => 2,
                        'description' =>  $description,
                    ]);
                    return 1;
                } else {
                    $Enquiry = new Enquiry;
                    $Enquiry->candidate_id = $candidatesId;
                    $Enquiry->provider_id   = $serviceId;
                    $Enquiry->status = 'Request';
                    $Enquiry->statuss = 1;
                    $Enquiry->is_forward  = 2;

                    $Enquiry->save();

                    Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('providers.type', $type)->update([
                        'is_forward' => 1
                    ]);

                    Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->update([
                        'is_forward' => 2,
                        'description' =>  $description,
                    ]);

                    return 1;
                }
            } else {
                Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('providers.type', $type)->update([
                    'is_forward' => 1
                ]);

                Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->update([
                    'is_forward' => 2,
                    'description' =>  $description,
                ]);
                return 1;
            }
        }
    }
    public function servicesConfirmEnquiry(Request $request)
    {
        $type = $request->type;
        $consultantId = $request->consultantId;
        $serviceId = $request->serviceId;

        if ($type == 'School' || $type == 'College' || $type == 'University') {
            Enquiry::where('candidate_id', $serviceId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('institutions.type', $type)->update([
                'is_forward' => 1
            ]);

            Enquiry::where('candidate_id', $serviceId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $consultantId)->update([
                'is_forward' => 2
            ]);

            return 1;
        } else {
            Enquiry::where('candidate_id', $serviceId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('providers.type', $type)->update([
                'is_forward' => 1
            ]);

            Enquiry::where('candidate_id', $serviceId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $consultantId)->update([
                'is_forward' => 2
            ]);
            return 1;
        }
    }

    public function servicesConfirmEnquiryUser(Request $request)
    {
        $type = $request->type;
        $candidateId = $request->candidateId;
        $serviceId = $request->serviceId;

        if ($type == 'School' || $type == 'College' || $type == 'University') {
            $serviceId =    Institution::where('user_id', $serviceId)->value('id');
            Enquiry::where('candidate_id', $candidateId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                'statuss' => 2
            ]);
            return 1;
        } else {
            $serviceId =    Consultant::where('user_id', $serviceId)->value('id');
            Enquiry::where('candidate_id', $candidateId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->update([
                'statuss' => 2
            ]);
            return 1;
        }
    }


    public function servicesConfirmEnquiryUserReject(Request $request)
    {
        $type = $request->type;
        $candidateId = $request->candidateId;
        $serviceId = $request->serviceId;

        if ($type == 'School' || $type == 'College' || $type == 'University') {
            $serviceId =    Institution::where('user_id', $serviceId)->value('id');
            Enquiry::where('candidate_id', $candidateId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                'statuss' => 0
            ]);
            return 1;
        } else {
            $serviceId =    Consultant::where('user_id', $serviceId)->value('id');

            Enquiry::where('candidate_id', $candidateId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->update([
                'statuss' => 0
            ]);
            return 1;
        }
    }
}
