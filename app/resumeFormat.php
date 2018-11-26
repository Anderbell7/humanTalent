<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resumeFormat extends Model
{
    use Notifiable;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'user_id', 'name', 'lastName', 'birthdate', 'identity', 'civilStatus', 'address', 'phone', 'cellPhone', 'email',
   ];
   
   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        # 'remember_token',
     ];
}
