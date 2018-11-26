<?php

namespace App\Http\Controllers;
use App\Curriculum;
use App\PersonalInfo;
use App\AcquiredSkills;
use App\PrincipalFunctions;
use App\FormalEducation;
use App\ComplementEducation;
use App\WorkExperience;
use App\Languages;
use Illuminate\Http\Request;
use Input;
use Auth;


class CurriculumController extends Controller
{

    /**
     * Show the step 1 Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.create-step1',compact('Curriculum', $curriculum));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function postCreateStep1(Request $request){
        
        #PersonalInfo::personalInfo($request->all());
        
        $personalInfo = new PersonalInfo;
        $personalInfo->user_id = $request->input('user_id');
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
        #return 'data saved';
    
    
        if(empty($request->session()->get('Curriculum'))){
            $curriculum = new Curriculum();
            #$curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }else{
            $curriculum = $request->session()->get('Curriculum');
            #$curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }

        return redirect('/resumes/create-step2');

    }


    /**
     * Show the step 2 Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.create-step2',compact('Curriculum', $curriculum));
    }

    /**
     * Post Request to store step2 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        
        #dd($request->all());
        $request->merge([ 
            'skills'  => implode(', ', (array) $request->get('skills')),
            ]);

            AcquiredSkills::create($request->all());

            // $skills = new AcquiredSkills;
            // $skills->user_id = $request->input('user_id');
            // $skills->save();  
            

        if(empty($request->session()->get('Curriculum'))){
            $curriculum = new Curriculum();
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }else{
            $curriculum = $request->session()->get('Curriculum');
            #$curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }

        return redirect('/resumes/create-step3');

    }

    /**
     * Show the step 3 Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.create-step3',compact('Curriculum', $curriculum));
    }

    /**
     * Post Request to store step3 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function postCreateStep3(Request $request){
        
        #PrincipalFunctions::principalFunctions($request->all());
        
        $principalFunctions = new PrincipalFunctions;
        $principalFunctions->user_id = $request->input('user_id');
        $principalFunctions->functions = $request->input('functions');
        $principalFunctions->save(); 
        #dd($request->all());
        #return 'data saved';
    
    
        if(empty($request->session()->get('Curriculum'))){
            $curriculum = new Curriculum();
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }else{
            $curriculum = $request->session()->get('Curriculum');
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }

        return redirect('/resumes/create-step4');

    }

    /**
     * Show the step 4 Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.create-step4',compact('Curriculum', $curriculum));
    }

    /**
     * Post Request to store step4 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function postCreateStep4(Request $request){
        
        $formalEducation = new FormalEducation;
        $formalEducation->user_id = $request->input('user_id');
        $formalEducation->modality = $request->input('modality');
        $formalEducation->grade = $request->input('grade');
        $formalEducation->graduate = $request->input('graduate');
        $formalEducation->degree = $request->input('degree');
        $formalEducation->title = $request->input('title');
        $formalEducation->college = $request->input('college');
        $formalEducation->save();
        #dd($request->all());
       # return 'data saved';
    
    
        if(empty($request->session()->get('Curriculum'))){
            $curriculum = new Curriculum();
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }else{
            $curriculum = $request->session()->get('Curriculum');
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }

        return redirect('/resumes/create-step5');

    }
   


       /**
     * Show the step 5 Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep5(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.create-step5',compact('Curriculum', $curriculum));
    }

    /**
     * Post Request to store step4 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function postCreateStep5(Request $request){
        
        $complementEducation = new ComplementEducation;
        $complementEducation->user_id = $request->input('user_id');
        $complementEducation->modality = $request->input('modality');
        $complementEducation->course = $request->input('course');
        $complementEducation->hourlyintensity = $request->input('hourlyintensity');
        $complementEducation->entity = $request->input('entity');
        $complementEducation->startDate = $request->input('startDate');
        $complementEducation->endDate = $request->input('endDate');
        $complementEducation->save();
        #dd($request->all()); 
        #return 'data saved';
    
    
        if(empty($request->session()->get('Curriculum'))){
            $curriculum = new Curriculum();
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }else{
            $curriculum = $request->session()->get('Curriculum');
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }

        return redirect('/resumes/create-step6');

    }
   


    /**
     * Show the step 6 Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep6(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.create-step6',compact('Curriculum', $curriculum));
    }

    /**
     * Post Request to store step6 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function postCreateStep6(Request $request){
        
            # WorkExperience::workExperience($request->all());
            
        $workExperience = new WorkExperience;
        $workExperience->user_id = $request->input('user_id');
        $workExperience->company = $request->input('company');
        $workExperience->startDate = $request->input('startDate');
        $workExperience->endDate = $request->input('endDate');
        $workExperience->duration = $request->input('duration');
        $workExperience->boss = $request->input('boss');
        $workExperience->phone = $request->input('phone');
        $workExperience->functions = $request->input('functions');
        $workExperience->save(); 
        #dd($request->all());
       # return 'data saved';
    
    
        if(empty($request->session()->get('Curriculum'))){
            $curriculum = new Curriculum();
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }else{
            $curriculum = $request->session()->get('Curriculum');
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }

        return redirect('/resumes/create-step7');

    }


    

    /**
     * Show the step 7 Form for creating a new Curriculum.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep7(Request $request)
    {
        $curriculum = $request->session()->get('Curriculum');
        return view('resumes.create-step7',compact('Curriculum', $curriculum));
    }

    /**
     * Post Request to store step7 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function postCreateStep7(Request $request){
        
       # Languages::languages($request->all());
        
        $languages = new Languages;
        $languages->user_id = $request->input('user_id');
        $languages->language = $request->input('language');
        $languages->level = $request->input('level');
        $languages->institute = $request->input('institute');
        $languages->save(); 
        #dd($request->all());
        #return 'data saved';
    
    
        if(empty($request->session()->get('Curriculum'))){
            $curriculum = new Curriculum();
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }else{
            $curriculum = $request->session()->get('Curriculum');
           # $curriculum->fill($validatedData);
            $request->session()->put('Curriculum', $curriculum);
        }

        return redirect('/resumes/uploadFiles');

    }


    
    // /**
    //  * Show the step 2 Form for creating a new Curriculum.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function createStep2(Request $request)
    // {
    //     $curriculum = $request->session()->get('Curriculum');
    //     return view('resumes.create-step2',compact('Curriculum', $curriculum));
    // }

    // /**
    //  * Post Request to store step1 info in session
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function postCreateStep2(Request $request)
    // {
    //     $curriculum = $request->session()->get('Curriculum');
    //     if(!isset($curriculum->CurriculumImg)) {
    //         $request->validate([
    //             'Curriculumimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         ]);

    //         $fileName = "CurriculumImage-" . time() . '.' . request()->Curriculumimg->getClientOriginalExtension();

    //         $request->Curriculumimg->storeAs('Curriculumimg', $fileName);

    //         $curriculum = $request->session()->get('Curriculum');

    //         $curriculum->CurriculumImg = $fileName;
    //         $request->session()->put('Curriculum', $curriculum);
    //     }
    //     return redirect('/resumes/create-step3');

    // }


}
