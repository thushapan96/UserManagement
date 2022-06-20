<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    use HasFactory;
    protected $table = 'calculator';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id','first_name','last_name','age','gender','email','city','country_citizen','country_residence','phone',
        'secondary_year_completion','secondary_board_name','secondary_total_mark','intermediate_certificate_year','intermediate_board_name','intermediate_total_mark',
        'graduation_degree','graduation_degree_year_completion','graduation_degree_course_duration','graduation_degree_major_subject','graduation_degree_year_gap','graduation_degree_gpa',
        'post_graduation','post_graduation_year_completion','post_graduation_course_duration','post_graduation_major_subject','post_graduation_year_gap','post_graduation_gpa',

        'is_rejected_college','rejected_college_reason','rejected_college_year','is_rejected_visa_past','rejected_visa_reason_past','rejected_visa_year_past',
        'is_rejected_visa','rejected_visa_reason','rejected_visa_year',

        'IELTS','IELTS_listening','IELTS_reading',
        'IELTS_writing','IELTS_speaking','IELTS_overall_score','Provincial_profile','EOI_profile',
   ];

   protected $casts = [
    
    'post_graduation' => 'array',
    'graduation_degree' => 'array',
  
    ];
}
