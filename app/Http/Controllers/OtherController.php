<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution;
use App\Models\Consultant;
use App\Models\TechnicalCertification;
use App\Models\Employment;
use App\Models\Education;
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
        } else {
            $feedback =  DB::table('candidate_personals')->where('user_id', $id)->value('feedback');
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
            $institutions = $institutions->where('course_type', $course_type);
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

    public function educationIndex()
    {
        if (Education::where('user_id', Auth::user()->id)->first()) {
            return redirect(route('view.education'));
        } else {
            return view('education');
        }
    }
    public function educationview()
    {
        $educations =  Education::where('user_id', Auth::user()->id)->first();
        $employments = Employment::where('education_id',  $educations->id)->get();
        $technicalCertifications = TechnicalCertification::where('education_id',  $educations->id)->get();

        return view('educationview')->with('educations', $educations)->with('employments', $employments)->with('technicalCertifications', $technicalCertifications);
    }


    public function educationStore(Request $request)
    {
        $Education = Education::create($request->all() + ['user_id' => Auth::user()->id]);

        if ($request->employer_name) {
            $count = count($request->employer_name);

            for ($i = 0; $i < $count; $i++) {
                $Employment = new Employment;
                $Employment->education_id  =  $Education->id;
                $Employment->employer_name  = $request->employer_name[$i];
                $Employment->job_tittle  = $request->job_tittle[$i];
                $Employment->job_field  = $request->job_field[$i];
                $Employment->year_job_work  = $request->year_job_work[$i];
                $Employment->from_year_job  = $request->from_year_job[$i];
                $Employment->to_year_job  = $request->to_year_job[$i];
                $Employment->save();
            }
        }

        if ($request->technical_certification_name) {
            $count = count($request->technical_certification_name);

            for ($i = 0; $i < $count; $i++) {
                $TechnicalCertification = new TechnicalCertification;

                $TechnicalCertification->education_id  =  $Education->id;
                $TechnicalCertification->technical_certification_name  = $request->technical_certification_name[$i];
                $TechnicalCertification->certificate_specialization  = $request->certificate_specialization[$i];
                $TechnicalCertification->technical_certification_course_duration  = $request->technical_certification_course_duration[$i];
                $TechnicalCertification->technical_certification_grade  = $request->technical_certification_grade[$i];
                $TechnicalCertification->technical_certification_year_completion  = $request->technical_certification_year_completion[$i];

                $TechnicalCertification->save();
            }
        }
        return redirect(route('view.education'));
    }
    public function educationEdit()
    {
        $educations =  Education::where('user_id', Auth::user()->id)->first();
        $employments = Employment::where('education_id',  $educations->id)->get();
        $technicalCertifications = TechnicalCertification::where('education_id',  $educations->id)->get();

        return view('editeducation')->with('educations', $educations)->with('employments', $employments)->with('technicalCertifications', $technicalCertifications);
    }

    public function educationUpdate(Request $request)
    {
        $Education =  Education::where('user_id', Auth::user()->id)->first();
        $Education->update($request->all());

        if ($request->employer_name) {
            $count = count($request->employer_name);

            for ($i = 0; $i < $count; $i++) {
                if ($request->is_employer == 'yes') {
                    $Employment = new Employment;
                    $Employment->education_id  =  $Education->id;
                    $Employment->employer_name  = $request->employer_name[$i];
                    $Employment->job_tittle  = $request->job_tittle[$i];
                    $Employment->job_field  = $request->job_field[$i];
                    $Employment->year_job_work  = $request->year_job_work[$i];
                    $Employment->from_year_job  = $request->from_year_job[$i];
                    $Employment->to_year_job  = $request->to_year_job[$i];
                    $Employment->save();
                } else {
                    $Employment = Employment::find($request->employmentsId[$i]);
                    $Employment->education_id  =  $Education->id;
                    $Employment->employer_name  = $request->employer_name[$i];
                    $Employment->job_tittle  = $request->job_tittle[$i];
                    $Employment->job_field  = $request->job_field[$i];
                    $Employment->year_job_work  = $request->year_job_work[$i];
                    $Employment->from_year_job  = $request->from_year_job[$i];
                    $Employment->to_year_job  = $request->to_year_job[$i];
                    $Employment->save();
                }
            }
        }

        if ($request->technical_certification_name) {
            $count = count($request->technical_certification_name);

            for ($i = 0; $i < $count; $i++) {
                if ($request->is_technical_certification == 'yes') {
                    $TechnicalCertification = new TechnicalCertification;

                    $TechnicalCertification->education_id  =  $Education->id;
                    $TechnicalCertification->technical_certification_name  = $request->technical_certification_name[$i];
                    $TechnicalCertification->certificate_specialization  = $request->certificate_specialization[$i];
                    $TechnicalCertification->technical_certification_course_duration  = $request->technical_certification_course_duration[$i];
                    $TechnicalCertification->technical_certification_grade  = $request->technical_certification_grade[$i];
                    $TechnicalCertification->technical_certification_year_completion  = $request->technical_certification_year_completion[$i];

                    $TechnicalCertification->save();
                } else {
                    $TechnicalCertification = TechnicalCertification::find($request->technicalCertificationsId[$i]);
                    $TechnicalCertification->education_id  =  $Education->id;
                    $TechnicalCertification->technical_certification_name  = $request->technical_certification_name[$i];
                    $TechnicalCertification->certificate_specialization  = $request->certificate_specialization[$i];
                    $TechnicalCertification->technical_certification_course_duration  = $request->technical_certification_course_duration[$i];
                    $TechnicalCertification->technical_certification_grade  = $request->technical_certification_grade[$i];
                    $TechnicalCertification->technical_certification_year_completion  = $request->technical_certification_year_completion[$i];

                    $TechnicalCertification->save();
                }
            }
        }
        return redirect(route('view.education'));
    }
}
