<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Input;




class UploadController extends Controller
{
   /**
     * Show the step uploadFiles Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadFiles(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.uploadFiles',compact('Curriculum', $curriculum));
    }
    
    /**
     * Post Request to store uploadFiles info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postUploadFiles(Request $request){
        
        #upload files
       
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $folder = $request->post('attach');
        \Storage::disk('local')->put(Auth::user()->name . '/' . $folder .  '/' . $fileName, \File::get($file));
        #dd($request->all());

        #return view
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.uploadFiles',compact('Curriculum', $curriculum)) . $fileName .' saved';
        
    }



}
