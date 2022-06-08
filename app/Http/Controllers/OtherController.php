<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution;
use App\Models\Consultant;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;

class OtherController extends Controller
{
    public function canadaInspire()
    {
    }
    public function feedback()
    {
        $id  = Auth::user()->id;
        if (Auth::user()->service_type == 'Consultation' || Auth::user()->service_type == 'Business') {
            $feedback =   Consultant::where('user_id', $id)->value('Comment');
        } elseif (Auth::user()->service_type == 'Institution') {
            $feedback =   Institution::where('user_id', $id)->value('Comment');
        }
        return view('other.feedback')->with('feedback', $feedback);
    }
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
            $consultants = Consultant::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('offering_service', 'like', '%' . ucwords($search). '%')->get();
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

        if ($searchType == 'RCIC Number') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('registration_number', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Company Name') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('company_name', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Country') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('country', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Province') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('region', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'City') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('city', 'like', '%' . $search . '%')->get();
        } elseif ($searchType == 'Specialization') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('specialization', 'like', '%' . ucwords($search) . '%')->get();
        } elseif ($searchType == 'Service Type') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('offering_service', 'like', '%' . ucwords($search). '%')->get();
        } elseif ($searchType == 'Owner Name') {
            $institutions = Institution::join('users', 'users.id', 'providers.user_id')->where('type',  $type)->select('providers.*', 'users.img as img')->where('first_name', 'like', '%' . $search . '%')->get();
        }

        return json_encode($institutions);
    }
}
