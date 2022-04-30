<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table = 'candidate_personals';

    protected $fillable = [
        'first_name','middle_name','last_name','residential_street','residential_street2','residential_city','residential_region',
        'residential_pincode','residential_country','corosponding_street','corosponding_street2',
        'corosponding_city','corosponding_region','corosponding_pincode','corosponding_country','mobile',
        'phone','email','birth_date','gender','is_already_apply','possible_start_date','immigration_purpose',
        'immigration_preference','is_vaccinate','fb_link','twitter_link','insta_link','Linkedin_link'
    ];
}
