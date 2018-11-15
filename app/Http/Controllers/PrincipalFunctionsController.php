<?php

namespace App\Http\Controllers;

use App\PrincipalFunctions;
use Illuminate\Http\Request;

class PrincipalFunctionsController extends Controller
{
    public function principalFunctions()
    {
        return view('curriculum.principalFunctions');
    }

    public function storePrincipalFunctions(Request $request){
        
        #PrincipalFunctions::principalFunctions($request->all());
        
        $principalFunctions = new PrincipalFunctions;
        $principalFunctions->functions = $request->input('functions');
        $principalFunctions->save(); 
        #dd($request->all());
        return 'data saved';
     }
}
