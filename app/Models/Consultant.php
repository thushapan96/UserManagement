<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'providers';
    protected $primaryKey = 'id';

    public function teams()
    {
        return $this->hasMany(Team::class,'providers_id');
    }

     protected $fillable = [
        'first_name','last_name','type','registration_number','registrar_office_area','company_name','status','language_known','country','region','city',
        'streat','postal_code','email','website_address','phone','specialization','express_entry_success','pnp_success','lmia_success','other_success','offering_service',
        'other_service','student_visa_success','tourist_visa_success','family_visa_success','other_visa_success','establishment_year','offering_year','total_cases_taken',
        'communication_mode_success','communication_mode','initial_chargeable_type','vedio_url','is_Policies','privacy_policy_document','history',
        'privacy_policy_detail','brief_introduction','achievement','event_new_weblink','Award','Comment','fb_link','youtube_link','twitter_link','insta_link','Linkedin_link',
        'google_review_link','initial_chargeable_comment','team_info',"response_time",'service_reject_reason','other_visa_reject','family_visa_reject','tourist_visa_reject',
        'student_visa_reject','specialization_rejected_reason','other_reject','lmia_reject','pnp_reject','express_entry_reject','mutiImg_about_award','mutiImg_about_company',
        'other_enrolment','lmia_enrolment','pnp_enrolment','express_entry_enrolment','other_visa_enrolment','family_visa_enrolment','tourist_visa_enrolment','student_visa_enrolment',
        'express_entry_reject_reason','pnp_reject_reason','lmia_reject_reason','other_reject_reason','student_visa_reject_reason','tourist_visa_reject_reason','family_visa_reject_reason','other_visa_reject_reason',
    ];

    protected $casts = [
        'language_known' => 'array',
        'communication_mode' => 'array',
        'other_service' => 'array',
        'offering_service' => 'array',
        'specialization' => 'array',
        'mutiImg_about_company' => 'array',
        'mutiImg_about_award' => 'array'
        ];
}
