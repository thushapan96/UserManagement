<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Permisson;
use App\Models\RolePermisson;
use App\Models\Setting;
use App\Models\User;
use App\Models\MembershipCandidate;
use App\Models\MembershipInstitution;
use App\Models\MembershipProvider;
use App\Models\Enquiry;
use App\Models\Personal;
use Illuminate\Support\Facades\DB;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {

            if (Auth::guard('admin')->user()) {
                $CandidateformsViewId = Permisson::where(['name' => 'Candidate Registration'])->value('id');
                $CandidateformsViewIdExist = RolePermisson::where('role_id', Auth::guard('admin')->user()->role_id)->where('permisson_id', $CandidateformsViewId)->first();
                $CandidateformsViewId2 = Permisson::where(['name' => 'Candidate Educational Assessment'])->value('id');
                $CandidateformsViewIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CandidateformsViewId2)->first();
                $CandidateformsViewId3 = Permisson::where(['name' => 'Candidate CRS Calculator'])->value('id');
                $CandidateformsViewIdExist3 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CandidateformsViewId3)->first();
                $CandidateformsViewId4 = Permisson::where(['name' => 'Candidate InProgress Report'])->value('id');
                $CandidateformsViewIdExist4 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CandidateformsViewId4)->first();

                $InstitudeformsviewId = Permisson::where(['name' => 'Institution registration form'])->value('id');
                $InstitudeformsviewIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $InstitudeformsviewId)->first();
                $InstitudeformsviewId2 = Permisson::where(['name' => 'Institution InProgress Report'])->value('id');
                $InstitudeformsviewIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $InstitudeformsviewId2)->first();

                $ConsultantformsviewId = Permisson::where(['name' => 'RCIC Consultant registration form'])->value('id');
                $ConsultantformsviewIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ConsultantformsviewId)->first();
                $ConsultantformsviewId2 = Permisson::where(['name' => 'RCIC Consultant InProgress Report'])->value('id');
                $ConsultantformsviewIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ConsultantformsviewId2)->first();
                $ImmigrationformsviewId = Permisson::where(['name' => 'Immigration registration form'])->value('id');
                $ImmigrationformsviewIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ImmigrationformsviewId)->first();
                $ImmigrationformsviewId2 = Permisson::where(['name' => 'Immigration InProgress Report'])->value('id');
                $ImmigrationformsviewIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ImmigrationformsviewId2)->first();

                $CharteredformsviewId = Permisson::where(['name' => 'Chartered registration form'])->value('id');
                $CharteredformsviewIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CharteredformsviewId)->first();
                $CharteredformsviewId2 = Permisson::where(['name' => 'Chartered InProgress Report'])->value('id');
                $CharteredformsviewIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CharteredformsviewId2)->first();

                $CandidateEnquiryId = Permisson::where(['name' => 'Candidate Enquiry View Status'])->value('id');
                $CandidateEnquiryIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CandidateEnquiryId)->first();

                $CandidateEnquiryId2 = Permisson::where(['name' => 'Candidate Enquiry Forward'])->value('id');
                $CandidateEnquiryIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CandidateEnquiryId2)->first();

                $InstitutionEnquiryId = Permisson::where(['name' => 'Institution Enquiry View Status'])->value('id');
                $InstitutionEnquiryIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $InstitutionEnquiryId)->first();

                $InstitutionEnquiryId2 = Permisson::where(['name' => 'Institution Enquiry Forward'])->value('id');
                $InstitutionEnquiryIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $InstitutionEnquiryId2)->first();

                $ConsultantEnquiryId = Permisson::where(['name' => 'RCIC Consultant Enquiry View Status'])->value('id');
                $ConsultantEnquiryIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ConsultantEnquiryId)->first();

                $ConsultantEnquiryId2 = Permisson::where(['name' => 'RCIC Consultant Enquiry Forward'])->value('id');
                $ConsultantEnquiryIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ConsultantEnquiryId2)->first();

                $ImmigrationEnquiryId = Permisson::where(['name' => 'Immigration Enquiry View Status'])->value('id');
                $ImmigrationEnquiryIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ImmigrationEnquiryId)->first();

                $ImmigrationEnquiryId2 = Permisson::where(['name' => 'Immigration Enquiry Forward'])->value('id');
                $ImmigrationEnquiryIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ImmigrationEnquiryId2)->first();

                $CharteredEnquiryId = Permisson::where(['name' => 'Chartered Accountant enquiry view status'])->value('id');
                $CharteredEnquiryIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CharteredEnquiryId)->first();

                $CharteredEnquiryId2 = Permisson::where(['name' => 'Chartered Accountant Enquiry Forward'])->value('id');
                $CharteredEnquiryIdExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CharteredEnquiryId2)->first();

                $UserManaging = Permisson::where(['name' => 'View'])->value('id');
                $UserManagingExist  = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManaging)->first();

                $UserManaging2 = Permisson::where(['name' => 'Add'])->value('id');
                $UserManagingExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManaging2)->first();

                $UserManaging3 = Permisson::where(['name' => 'Edit'])->value('id');
                $UserManagingExist3 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManaging3)->first();

                $UserManaging4 = Permisson::where(['name' => 'Suspend'])->value('id');
                $UserManagingExist4 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManaging4)->first();

                $UserManaging5 = Permisson::where(['name' => 'Reset Password'])->value('id');
                $UserManagingExist5 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManaging5)->first();


                $Reports = Permisson::where(['name' => 'Enquiries'])->value('id');
                $ReportsExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $Reports)->first();

                $Reports2 = Permisson::where(['name' => 'membership expiry'])->value('id');
                $ReportsExist2 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $Reports2)->first();

                $Reports3 = Permisson::where(['name' => 'Accounting'])->value('id');
                $ReportsExist3 = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $Reports3)->first();

                $DashboardId = Permisson::where(['name' => 'Dashboard'])->value('id');
                $DashboardIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $DashboardId)->first();
                $test = $DashboardIdExist;

                $AccountsId = Permisson::where(['name' => 'Account'])->value('id');
                $AccountsIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $AccountsId)->first();

                $settingId = Permisson::where(['name' => 'Settings'])->value('id');
                $settingIdExist = RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $settingId)->first();

                $currencyPrice = Setting::where('type', 'currency')->value('value');
                $configureDate = Setting::where('type', 'date')->value('value');


                $view->with('DashboardIdExist', $DashboardIdExist)
                    ->with('test', $test)
                    ->with('CandidateformsViewIdExist', $CandidateformsViewIdExist)
                    ->with('CandidateformsViewIdExist2', $CandidateformsViewIdExist2)
                    ->with('CandidateformsViewIdExist3', $CandidateformsViewIdExist3)
                    ->with('CandidateformsViewIdExist4', $CandidateformsViewIdExist4)

                    ->with('InstitudeformsviewIdExist', $InstitudeformsviewIdExist)
                    ->with('InstitudeformsviewIdExist2', $InstitudeformsviewIdExist2)
                    ->with('ConsultantformsviewIdExist', $ConsultantformsviewIdExist)
                    ->with('ConsultantformsviewIdExist2', $ConsultantformsviewIdExist2)
                    ->with('ImmigrationformsviewIdExist', $ImmigrationformsviewIdExist)
                    ->with('ImmigrationformsviewIdExist2', $ImmigrationformsviewIdExist2)
                    ->with('CharteredformsviewIdExist', $CharteredformsviewIdExist)
                    ->with('CharteredformsviewIdExist2', $CharteredformsviewIdExist2)

                    ->with('CandidateEnquiryIdExist', $CandidateEnquiryIdExist)
                    ->with('CandidateEnquiryIdExist2', $CandidateEnquiryIdExist2)
                    ->with('InstitutionEnquiryIdExist', $InstitutionEnquiryIdExist)
                    ->with('InstitutionEnquiryIdExist2', $InstitutionEnquiryIdExist2)
                    ->with('ConsultantEnquiryIdExist', $ConsultantEnquiryIdExist)
                    ->with('ConsultantEnquiryIdExist2', $ConsultantEnquiryIdExist2)
                    ->with('ImmigrationEnquiryIdExist', $ImmigrationEnquiryIdExist)
                    ->with('ImmigrationEnquiryIdExist2', $ImmigrationEnquiryIdExist2)
                    ->with('CharteredEnquiryIdExist', $CharteredEnquiryIdExist)
                    ->with('CharteredEnquiryIdExist2', $CharteredEnquiryIdExist2)

                    ->with('UserManagingExist', $UserManagingExist)
                    ->with('UserManagingExist2', $UserManagingExist2)
                    ->with('UserManagingExist3', $UserManagingExist3)
                    ->with('UserManagingExist4', $UserManagingExist4)
                    ->with('UserManagingExist5', $UserManagingExist5)

                    ->with('ReportsExist', $ReportsExist)
                    ->with('ReportsExist2', $ReportsExist2)
                    ->with('ReportsExist3', $ReportsExist3)
                    ->with('AccountsIdExist', $AccountsIdExist)
                    ->with('settingIdExist', $settingIdExist)

                    ->with('currencyPrice', $currencyPrice)
                    ->with('configureDate', $configureDate);
            }

            if (Auth::user()) {
                $currencyPrice = Setting::where('type', 'currency')->value('value');
                $configureDate = Setting::where('type', 'date')->value('value');

                if (Auth::user()->service_type == 'Institution') {
                    if (Auth::user()->membership_institution_id) {
                        $MembershipInstitution  =  MembershipInstitution::find(Auth::user()->membership_institution_id);

                        $MembershipInstitutionDiploma  = $MembershipInstitution->Diploma;
                        $MembershipInstitutionPG_Diploma   = $MembershipInstitution->PG_Diploma;
                        $MembershipInstitutionCertification   = $MembershipInstitution->Certification;
                        $MembershipInstitutionGraduation   = $MembershipInstitution->Graduation;
                        $MembershipInstitutionPost_Graduation   = $MembershipInstitution->Post_Graduation;
                        $MembershipInstitutionDoctorate   = $MembershipInstitution->Doctorate;
                        $MembershipInstitutionSchool   = $MembershipInstitution->Enquiries;


                        $view->with('currencyPrice', $currencyPrice)
                            ->with('configureDate', $configureDate)
                            
                            ->with('MembershipInstitutionDiploma', $MembershipInstitutionDiploma)
                            ->with('MembershipInstitutionPG_Diploma', $MembershipInstitutionPG_Diploma)
                            ->with('MembershipInstitutionCertification', $MembershipInstitutionCertification)
                            ->with('MembershipInstitutionGraduation', $MembershipInstitutionGraduation)
                            ->with('MembershipInstitutionPost_Graduation', $MembershipInstitutionPost_Graduation)
                            ->with('MembershipInstitutionDoctorate', $MembershipInstitutionDoctorate)
                            ->with('MembershipInstitutionSchool', $MembershipInstitutionSchool);
                    }
                } else if (Auth::user()->service_type == 'Business' || Auth::user()->service_type == 'Consultation') {
                    if (Auth::user()->membership_provider_id) {
                        $MembershipProvider  =  MembershipProvider::find(Auth::user()->membership_provider_id);

                        if (Auth::user()->service == 'RCIC Consultant') {
                            $MembershipProviderEnquiries  =  $MembershipProvider->EnquiriesRCICConsultant;
                        } else if (Auth::user()->service == 'Chartered Accountant') {
                            $MembershipProviderEnquiries   =  $MembershipProvider->EnquiriesBusiness;
                        } else {
                            $MembershipProviderEnquiries  =  $MembershipProvider->EnquiriesImmigration;
                        }

                        $view->with('currencyPrice', $currencyPrice)
                            ->with('configureDate', $configureDate)
                            ->with('MembershipProviderEnquiries', $MembershipProviderEnquiries);
                    }
                } else {
                    if (Auth::user()->membership_plan_id) {

                        $MembershipCandidate  =  MembershipCandidate::find(Auth::user()->membership_plan_id);

                        $MembershipCandidateEnquiriesSchool =  $MembershipCandidate->EnquiriesSchool;
                        $MembershipCandidateEnquiriesUniversity =  $MembershipCandidate->EnquiriesUniversity;
                        $MembershipCandidateEnquiriesCollege =  $MembershipCandidate->EnquiriesCollege;
                        $MembershipCandidateEnquiriesRCICConsultant =  $MembershipCandidate->EnquiriesRCICConsultant;
                        $MembershipCandidateEnquiriesImmigration =  $MembershipCandidate->EnquiriesImmigration;
                        $MembershipCandidateEnquiriesBusiness =  $MembershipCandidate->EnquiriesBusiness;

                        $candidate_id  =  Personal::where('user_id', Auth::user()->id)->value('id');

                        $currentEnquirySchool  = Enquiry::where('candidate_id', $candidate_id)
                            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                            ->where('enquiries.statuss', '>', 0)
                            ->where('institutions.type', 'School')
                            ->count();

                        $currentEnquiryCollege  = Enquiry::where('candidate_id', $candidate_id)
                            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                            ->where('enquiries.statuss', '>', 0)
                            ->where('institutions.type', 'College')
                            ->count();

                        $currentEnquiryUniversity  = Enquiry::where('candidate_id', $candidate_id)
                            ->join('institutions', 'institutions.id', 'enquiries.institution_id')
                            ->where('enquiries.statuss', '>', 0)
                            ->where('institutions.type', 'University')
                            ->count();

                        $currentEnquiryConsultant  = Enquiry::where('candidate_id', $candidate_id)
                            ->join('providers', 'providers.id', 'enquiries.provider_id',)
                            ->where('enquiries.statuss', '>', 0)
                            ->where('providers.type', 'RCIC Consultant')
                            ->count();

                        $currentEnquiryImmigration  = Enquiry::where('candidate_id', $candidate_id)
                            ->join('providers', 'providers.id', 'enquiries.provider_id',)
                            ->where('enquiries.statuss', '>', 0)
                            ->where('providers.type', 'Immigration Lawyer/Attorney')
                            ->count();

                        $currentEnquiryAccountant = Enquiry::where('candidate_id', $candidate_id)
                            ->join('providers', 'providers.id', 'enquiries.provider_id',)
                            ->where('enquiries.statuss', '>', 0)
                            ->where('providers.type', 'Chartered Accountant')
                            ->count();


                        $view->with('currencyPrice', $currencyPrice)
                            ->with('configureDate', $configureDate)

                            ->with('currentEnquirySchool', $currentEnquirySchool)
                            ->with('currentEnquiryCollege', $currentEnquiryCollege)
                            ->with('currentEnquiryUniversity', $currentEnquiryUniversity)

                            ->with('currentEnquiryConsultant', $currentEnquiryConsultant)
                            ->with('currentEnquiryImmigration', $currentEnquiryImmigration)
                            ->with('currentEnquiryAccountant', $currentEnquiryAccountant)

                            ->with('MembershipCandidateEnquiriesSchool', $MembershipCandidateEnquiriesSchool)
                            ->with('MembershipCandidateEnquiriesUniversity', $MembershipCandidateEnquiriesUniversity)
                            ->with('MembershipCandidateEnquiriesCollege', $MembershipCandidateEnquiriesCollege)
                            ->with('MembershipCandidateEnquiriesRCICConsultant', $MembershipCandidateEnquiriesRCICConsultant)
                            ->with('MembershipCandidateEnquiriesImmigration', $MembershipCandidateEnquiriesImmigration)
                            ->with('MembershipCandidateEnquiriesBusiness', $MembershipCandidateEnquiriesBusiness);
                    }
                }
            }
        });
    }
}
