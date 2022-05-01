<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = 'candidate_work_places';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id','designation','country','Year_completion','attach_experience_certificate',
        'attach_salary_slip','attach_offer_letter','work_profile_letter'      
    ];

}
