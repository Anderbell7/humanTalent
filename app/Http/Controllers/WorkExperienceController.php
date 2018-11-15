<?php

namespace App\Http\Controllers;

use App\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function workExperience(){
        return view('curriculum.workExperience');
    }

    public function storeWorkExperience(Request $request){
        
       # WorkExperience::workExperience($request->all());
        
        $workExperience = new WorkExperience;
        $workExperience->company = $request->input('company');
        $workExperience->startDate = $request->input('startDate');
        $workExperience->endDate = $request->input('endDate');
        $workExperience->duration = $request->input('duration');
        $workExperience->boss = $request->input('boss');
        $workExperience->phone = $request->input('phone');
        $workExperience->functions = $request->input('functions');
        $workExperience->save(); 
        #dd($request->all());
        return 'data saved';
    }
}
