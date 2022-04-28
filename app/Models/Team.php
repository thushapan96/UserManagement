<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';

    public function providers()
    {
        return $this->belongsTo(Provider::class,'foreign_key', 'provider_id');
    }
}
