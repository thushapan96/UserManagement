<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;
    protected $table = 'institutions';

    protected $fillable = [
        'name', 'type', 'registration_number', 'registrar_office_area', 'Comment', 'Award', 'achievement', 'history', 'brief_introduction', 'privacy_policy_document',
        'is_privacy_policy', 'vedio_url', 'eca', 'fee_structure_website', 'admission_criteria_website', 'admission_criteria_website', 'is_conduct_webinar', 'is_conduct_webinar',
        'is_scholarship_offer', 'language_test_type', 'other_require', 'course_duration', 'certificate_type', 'is_credit', 'is_financial', 'no_success_student', 'no_student',
        'offer_course', 'communication_mode', 'response_time', 'offering_year', 'establishment_year', 'ranking_criteria', 'college_ranking', 'admission_type', 'intake', 'course_type',
        'dean_phone', 'dean_email', 'dean_name', 'admission_email', 'admission_phone', 'phone', 'website_address', 'email', 'postal_code', 'streat', 'city', 'region', 'country', 'offer_course_info',
        'fb_link', 'youtube_link', 'twitter_link', 'insta_link', 'Linkedin_link',
    ];

    protected $casts = [
        'course_type' => 'array',
        'intake' => 'array',
        'communication_mode' => 'array',
        'offer_course' => 'array',
        'certificate_type' => 'array',
        'course_duration' => 'array',
        'other_require' => 'array',
        'language_test_type' => 'array',
    ];
}
