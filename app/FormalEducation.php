<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class FormalEducation extends Model
{
    use Notifiable;
    protected $guarded = [];
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'modality', 'grade', 'graduate', 'degree', 'title', 'college',  
   ];

 
   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
     #  'remember_token',
   ];
}
