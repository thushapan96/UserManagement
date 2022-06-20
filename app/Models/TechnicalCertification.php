<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalCertification extends Model
{
    use HasFactory;

    protected $table = 'technical_certification';
    protected $primaryKey = 'id';

    protected $fillable = [
        'education_id','calculator_id', 'technical_certification_name', 'certificate_specialization', 'technical_certification_course_duration', 'technical_certification_grade',
        'technical_certification_year_completion','type'
    ];
}
