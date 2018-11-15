<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class complementEducation extends Model
{
    use Notifiable;
    protected $guarded = [];
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'modality', 'course', 'hourlyintensity', 'entity', 'startDate', 'endDate',  
   ];

 
   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
     #  'remember_token',
   ];}
