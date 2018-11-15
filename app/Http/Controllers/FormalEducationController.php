<?php

namespace App\Http\Controllers;

use App\FormalEducation;
use Illuminate\Http\Request;

class FormalEducationController extends Controller
{
    public function formalEducation()
    {
        return view('curriculum.formalEducation');
    }

    public function store(Request $request)
    {
        
/*         # FormalEducation::formalEducation($request->all());
        $formalEducation = new FormalEducation;
         $validatedData = $request->validate([
            'modality'=>'required',
            'grade'=>'required',
            'graduate'=>'required',
            'deferred'=>'required',
            'title'=>'required',
            'college'=>'required',
         ]);
 */
 
         $formalEducation = new FormalEducation;
         $formalEducation->modality = $request->input('modality');
         $formalEducation->grade = $request->input('grade');
         $formalEducation->graduate = $request->input('graduate');
         $formalEducation->deferred = $request->input('deferred');
         $formalEducation->title = $request->input('title');
         $formalEducation->college = $request->input('college');
         dd($request->all());
         #return 'data saved';
     }
}
