<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;
    protected $table = 'qualifications';
    protected $fillable = [
'type','name','candidate_academic_id','address','distant','Year_completion','applicable_eca_validity','country','attachment','tech'
    ];
}
