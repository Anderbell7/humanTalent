<?php

namespace App\Http\Controllers;

use App\Languages;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function languages(){
        return view('curriculum.languages');
    }

    public function storeLanguages(Request $request){
        
       # Languages::languages($request->all());
        
        $languages = new Languages;
        $languages->language = $request->input('language');
        $languages->level = $request->input('level');
        $languages->institute = $request->input('institute');
        $languages->save(); 
        #dd($request->all());
        return 'data saved';
    }
}
