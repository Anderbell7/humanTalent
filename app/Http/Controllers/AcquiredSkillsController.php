<?php

namespace App\Http\Controllers;
use App\AcquiredSkills;
use Illuminate\Http\Request;

class AcquiredSkillsController extends Controller
{
    public function acquiredSkills(){
        return view('curriculum.acquiredSkills');
    }


    public function postAcquiredSkills(Request $request)
    {

       # dd($request->all());
        $request->merge([ 
        'skills' => implode(', ', (array) $request->get('skills'))
        ]);

        AcquiredSkills::create($request->all());
    
    return redirect('/curriculum/formalEducation');
    
    }

}
