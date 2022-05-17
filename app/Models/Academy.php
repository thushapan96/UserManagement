<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;
    protected $table = 'candidate_academics';
    protected $fillable = [
        'user_id','language_proficiency','language_level','language_certified_by','language_attachment','applicant_test_name','test_valid_upto','test_attachment'
    ];

}

