<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermisson extends Model
{
    use HasFactory;
    protected $table = 'role_permisson';
    protected $primaryKey = 'id';

    protected $fillable = [
      'role_id','permisson_id',
   ];
}
