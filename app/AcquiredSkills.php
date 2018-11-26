<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AcquiredSkills extends Model
{
    use Notifiable;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
    'user_id', 'skills', 
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
