<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderEnquiry extends Model
{
    use HasFactory;

    protected $table = 'provider_enquiries';
    protected $primaryKey = 'id';

    protected $fillable = [
       'candidate_id','provider_id','institution_id' ,'status', 'statuss', 'date', 'description', 
    ];
}
