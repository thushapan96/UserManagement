<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution;
use App\Models\Consultant;
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

        if ($searchType == 'RCIC Number') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('registration_number', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Company Name') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('company_name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Country') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('country', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Province') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('region', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'City') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('city', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Specialization') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('specialization', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Service Type') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('offering_service', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Owner Name') {
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('first_name', 'like', '%' . $search . '%')->get();
        }

        return json_encode($consultants);
    }

    public function institudeSearch(Request $request)
    {
        $search = $request->search;
        $type = $request->type;
        $searchType = $request->searchType;
        $course_type = $request->course_type;
        $financial = $request->financial;

        $institutions = Institution::join('users', 'users.id', 'institutions.user_id')->select('institutions.*', 'users.img as img')->where('type',  $type);
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
}
