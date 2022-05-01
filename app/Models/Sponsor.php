<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $table = 'candidate_sponsors';
    protected $fillable = [
        'user_id', 'first_name', 'middle_name', 'last_name', 'sponsor_relation', 'sponsor_status', 'sponsor_mobile',
        'sponsor_telephone', 'sponsor_email', 'sponsor_street', 'sponsor_street2', 'sponsor_city', 'sponsor_region', 'sponsor_pincode', 'sponsor_country',
        'guardian_country', 'guardian_pincode', 'guardian_region', 'guardian_city', 'guardian_street2', 'guardian_street', 'guardian_email',
        'guardian_mobile', 'guardian_relation'
    ];
}
