<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $table = 'enquiries';
    protected $primaryKey = 'id';

    protected $fillable = [
       'candidate_id','provider_id','institution_id' ,'status', 'statuss', 'date', 'description', 
    ];
}
