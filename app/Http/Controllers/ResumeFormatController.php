<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;

class ResumeFormatController extends Controller
{
       /**
     * Show the resumeFormat for view a new Curriculum .
     *
     * @return \Illuminate\Http\Response
     */
    public function resumeFormat(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.resumeFormat',compact('Curriculum', $curriculum));

    }


    
}
