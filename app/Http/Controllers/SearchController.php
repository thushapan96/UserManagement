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
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;

class SearchController extends Controller
{
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
        return json_encode($institutions);
    }

    public function confirmEnquiry(Request $request)
    {
        $type = $request->type;
        $candidatesId = $request->candidatesId;
        $serviceId = $request->serviceId;


        if ($type == 'School' || $type == 'College' || $type == 'University') {
            if ($request->new) {
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
                    'is_forward' => 2
                ]);

                return 1;
            } else {
                Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('institutions.type', $type)->update([
                    'is_forward' => 1
                ]);

                Enquiry::where('candidate_id', $candidatesId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                    'is_forward' => 2
                ]);

                return 1;
            }
        } else {

            if ($request->new) {
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
                    'is_forward' => 2
                ]);
                
                return 1;
            } else {
                Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('providers.type', $type)->update([
                    'is_forward' => 1
                ]);

                Enquiry::where('candidate_id', $candidatesId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->update([
                    'is_forward' => 2
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
            Enquiry::where('candidate_id', $candidateId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                'statuss' => 2
            ]);
            return 1;
        } else {
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
            Enquiry::where('candidate_id', $candidateId)->join('institutions', 'institutions.id', 'enquiries.institution_id')->where('enquiries.institution_id', $serviceId)->update([
                'statuss' => 0
            ]);
            return 1;
        } else {
            Enquiry::where('candidate_id', $candidateId)->join('providers', 'providers.id', 'enquiries.provider_id')->where('enquiries.provider_id', $serviceId)->update([
                'statuss' => 0
            ]);
            return 1;
        }
    }
}
