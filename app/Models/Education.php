<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'education';
    protected $primaryKey = 'id';

    protected $fillable = [
         'user_id','first_name','last_name','age','gender','email','city','country_citizen','country_residence','phone','enrollment_request','enrollment_request_comment',
         'secondary_year_completion','secondary_board_name','secondary_total_mark','intermediate_certificate_year','intermediate_board_name','intermediate_total_mark',
         'graduation_degree','graduation_degree_year_completion','graduation_degree_course_duration','graduation_degree_major_subject','graduation_degree_year_gap','graduation_degree_gpa',
         'post_graduation','post_graduation_year_completion','post_graduation_course_duration','post_graduation_major_subject','post_graduation_year_gap','post_graduation_gpa',
         'degree_year','master_degree_year','phd_year','pg_diploma_year','interest_pursue_higher_education','preferred_intake','preferred_college','preferred_university','preferred_State',
         'preferred_region','preferred_city','communication_mode','is_rejected_college','rejected_college_reason','rejected_college_year','is_rejected_visa_past','rejected_visa_reason_past','rejected_visa_year_past',
         'is_rejected_visa','rejected_visa_reason','rejected_visa_year','prerequisite_document','eca','eca_date','passport_valid','IELTS_attempted','GRE_attempted','TOEFL_attempted',
         'GMAT_attempted','interested_attempted','feedback',
    ];

    protected $casts = [
        'prerequisite_document' => 'array',
        'post_graduation' => 'array',
        'graduation_degree' => 'array',
        'preferred_intake' => 'array',
        ];
}
