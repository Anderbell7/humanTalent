<?php

namespace App\Http\Controllers;

use App\PersonalInfo;
use App\Http\Requests;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function personalInfo()
    {
        return view('curriculum.personalInfo');
    }
   
    public function storePersonalInfo(Request $request){
       
        #PersonalInfo::personalInfo($request->all());
        
        $personalInfo = new PersonalInfo;
        $personalInfo->name = $request->input('name');
        $personalInfo->lastName = $request->input('lastName');
        $personalInfo->birthdate = $request->input('birthdate');
        $personalInfo->identity = $request->input('identity');
        $personalInfo->civilStatus = $request->input('civilStatus');
        $personalInfo->address = $request->input('address');
        $personalInfo->phone = $request->input('phone');
        $personalInfo->cellPhone = $request->input('cellPhone');
        $personalInfo->email = $request->input('email');
        $personalInfo->save();  
        #dd($request->all());
        return 'data saved';
     }
}
