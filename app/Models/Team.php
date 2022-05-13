<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $primaryKey = 'id';

    public function consultants()
    {
        return $this->belongsTo(Consultant::class,'id','provider_id');
    }
    protected $fillable = [
     "provider_id","member","Designation","expertise_area","experience_year","no_success","team_img"
    ];

}
