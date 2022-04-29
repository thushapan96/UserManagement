<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'providers';

    public function teams()
    {
        return $this->hasMany(Team::class,'foreign_key', 'provider_id');
    }
    

}
