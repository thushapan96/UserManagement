<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
  
    use Notifiable;

    // protected $guard = 'admin';

    protected $table = 'admin';
    protected $primaryKey = 'id';

    protected $fillable = [
       'role_id', 'first_name','last_name','phone','email','role','password','img'   
   ];

}
