<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;
    protected $table = 'employment';
    protected $primaryKey = 'id';

    protected $fillable = [
        'education_id', 'employer_name', 'job_tittle', 'job_field', 'year_job_work', 'from_year_job', 'to_year_job',
    ];
}
