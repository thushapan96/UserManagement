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

        $type = $request->type;
        $PersonalId =  Personal::where('user_id', Auth::user()->id)->value('id');

        if ($type == 'institution') {
            $Enquiry =  Enquiry::where('institution_id', $id)->where('candidate_id',  $PersonalId)->first();
            if ($Enquiry) {
                $Enquiry->status = $status;
                $Enquiry->statuss  =  $statuss;
                $Enquiry->save();
            } else {
                $Enquiry =  new Enquiry;
                $Enquiry->candidate_id = $PersonalId;
                $Enquiry->institution_id  = $id;
                $Enquiry->status  =  $status;
                $Enquiry->statuss  =  $statuss;
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
        $EnquiryInstitution =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 0)
            ->where('enquiries.status','!=', 'Cancel by Candidate')
            ->select('institutions.*',  'enquiries.*', 'users.img as img','institutions.id as serviceId')
            ->get();
        $EnquiryInstitution1 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 1)
            ->select('institutions.*',  'enquiries.*', 'users.img as img','institutions.id as serviceId')
            ->get();
        $EnquiryInstitution2 =   Enquiry::where('candidate_id', $candidate_id)
            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
            ->join('users', 'users.id', 'institutions.user_id')
            ->where('enquiries.statuss', 2)
            ->select('institutions.*',  'enquiries.*', 'users.img as img','institutions.id as serviceId')
            ->get();

        $EnquiryProvider =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id',)
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 0)
            ->where('enquiries.status','!=', 'Cancel by Candidate')
            ->select('providers.*', 'enquiries.*', 'users.img as img','providers.id as serviceId')
            ->get();
        $EnquiryProvider1 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 1)
            ->select('providers.*', 'enquiries.*', 'users.img as img','providers.id as serviceId')
            ->get();
        $EnquiryProvider2 =  Enquiry::where('candidate_id', $candidate_id)
            ->join('providers', 'providers.id', 'enquiries.provider_id')
            ->join('users', 'users.id', 'providers.user_id')
            ->where('enquiries.statuss', 2)
            ->select('providers.*', 'enquiries.*', 'users.img as img','providers.id as serviceId')
            ->get();

        $Enquiries =  $EnquiryInstitution->merge($EnquiryProvider);

        return view('enquiry.candidate')->with('Enquiries', $Enquiries)
            ->with('EnquiryInstitution', $EnquiryInstitution)
            ->with('EnquiryInstitution1', $EnquiryInstitution1)
            ->with('EnquiryInstitution2', $EnquiryInstitution2)
            ->with('EnquiryProvider', $EnquiryProvider)
            ->with('EnquiryProvider1', $EnquiryProvider1)
            ->with('EnquiryProvider2', $EnquiryProvider2);
    }
}
