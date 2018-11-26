@extends('layout.layout')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    <table class="table" style="border:solid 0.5px gray;">
       <tr align="center" valign="middle" >
            
            <th class="text-center" rowspan="2" style="border:solid 0.3px gray;" >
                
                <br>
                <img src="https://www.aldeamo.com/wp-content/uploads/2018/09/logo-x200ancho.png" srcset="https://www.aldeamo.com/wp-content/uploads/2018/09/logo-x200ancho.png 1x, https://www.aldeamo.com/wp-content/uploads/2018/09/logo-x400ancho.png 2x" width="200" height="53" style="max-height: 53px; height: auto;" alt="Aldeamo Logo" retina_logo_url="https://www.aldeamo.com/wp-content/uploads/2018/09/logo-x400ancho.png" class="fusion-standard-logo">
            </th>
            <th colspan="2" class="text-center" style="border:solid 0.3px gray; " height="3">
            <br>
                <p>UNIQUE BUSINESS LIFE SHEET FORMAT</p> 
                 <br>    
            </th>          
        </tr>

        <tr align="center" valign="middle">   
            <th colspan="2" class="text-center" style="border:solid 0.5px gray;"  height="3">

                {{ auth()->user()->name }}
      
            </th>                    
        </tr>
    </table>

<!--Personal info-->

    <!--center><h1>UNIQUE BUSINESS LIFE SHEET FORMAT</h1></center-->
    <br>
    <center><h2>Personal Information</h2></center>  

            <label for="Name">Name: </label>
            @php 
                $session = ( auth()->user()->id );
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('name')
                    ->get();
                    echo substr($pInfo, 10, -3);
            @endphp
           <br>
        
            <label for="lastName">Last name: </label>
            @php 
               
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('lastName')
                    ->get();
                    echo substr($pInfo, 14, -3);
            @endphp    
            <br>

            <label for="birthdate">Birthdate: </label>
            @php 
                
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('birthdate')
                    ->get();
                    echo substr($pInfo, 15, -3);
            @endphp  
            <br>

            <label for="document">Document number: </label>
            @php 
                
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('identity')
                    ->get();
                    echo substr($pInfo, 14, -3);
            @endphp
            <br>

            <label for="civilStatus">Civil Status: </label>
            @php 
                
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('civilStatus')
                    ->get();
                    echo substr($pInfo, 17, -3);
            @endphp
            <br>

            <label for="Address">Residence address: </label>
            @php 
                
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('address')
                    ->get();
                    echo substr($pInfo, 13, -3);
            @endphp
            <br>

            <label for="phone">Phone number: </label>
            @php 
                
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('phone')
                    ->get();
                    echo substr($pInfo, 11, -3);
            @endphp
            <br>

            <label for="cell">Cell Phone: </label>
            @php 
                
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('cellPhone')
                    ->get();
                    echo substr($pInfo, 15, -3);
            @endphp
           <br>

            <label for="email">E-mail: </label>
            @php 
                
                    $pInfo = DB::table('personal_infos')->where('user_id', '=', $session)
                    ->select('email')
                    ->get();
                    echo substr($pInfo, 11, -3);
            @endphp
      
<!--End personal Info-->
<br>

 <center><h2>Main functions in the Company</h2></center>
        
        <table class="table" >
            <thead >
                 <tr >
                    <th scope="col" style="border:solid 0.5px gray;">Principal Functions</th>
                </tr>
            </thead>

            <tbody>
         
                <tr>
                <td scope="row" style="border:solid 0.5px gray;">
                @php 
                        $mfunc = DB::table('principal_functions')->where('user_id', '=', $session)
                        ->select('functions')
                        ->get();
                        echo substr($mfunc, 15, -3);
                @endphp
                </td>

                </tr>
                
            </tbody>
        </table>
        <br>
<!--Acquired skills--> 
        <center><h2>Acquired Skills</h2></center>
        <table class="table" >
            <thead >
                 <tr >
                    <th scope="col" style="border:solid 0.5px gray;">Skills</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td scope="row" style="border:solid 0.5px gray;">
                @php 
                    
                        $acquS = DB::table('acquired_skills')->where('user_id', '=', $session)
                        ->select('skills')
                        ->get();
                        echo substr($acquS, 12, -3);
                @endphp
                </td>
                </tr>
            </tbody>
        </table>
<!--End acquired skills-->

<br>

<!-- Formal education-->
        <center><h2>Formal Education</h2></center>
        <p> (List in chronological order the studies carried out, from the most recent to the oldest, indicating one of the following academic modalities: BCH-baccalaureate, TC-technician, TL-technologist, UN-university, DP-diploma, ES-specialization, MG-mastery or magister, DOC-doctorate or PHD. * It is necessary to attach supports *) </p>
        <br>
        <table class="table" style="border:solid 0.5px gray;">
            <thead>
              <tr align="center" valign="middle" cellspacing="2">
                    <th class="text-center" rowspan="2" style="border:solid 0.5px gray;">
                    Modality
                    </th>
                    <th class="text-center" rowspan="2" style="border:solid 0.5px gray;">
                    Approved grades
                    </th>
                    <th colspan="2" class="text-center" style="border:solid 0.5px gray;">
                    Graduate
                    </th>
                    
                    <th class="text-center" rowspan="2" style="border:solid 0.5px gray;"> 
                    Obtained title
                    </th>
                    <th class="text-center" rowspan="2" style="border:solid 0.5px gray;">
                    University or College
                    </th>
                   
                    
                </tr>
                <tr align="center" valign="middle" color="while"> 
                    
                    <th style="border:solid 0.5px gray;"><small> Yes / date of degree</small></th>
                    <th style="border:solid 0.5px gray;"><small>No (Ongoing or Postponed?)</small></th>
                    
                </tr>
            </thead>
            <tbody>
                 
                      <tr>

                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $fEduc = DB::table('formal_educations')->where('user_id', '=', $session)
                                ->select('modality')
                                ->get();
                                echo substr($fEduc, 14, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $fEduc = DB::table('formal_educations')->where('user_id', '=', $session)
                                ->select('grade')
                                ->get();
                                echo substr($fEduc, 11, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $fEduc = DB::table('formal_educations')->where('user_id', '=', $session)
                                ->select('graduate')
                                ->get();
                                echo substr($fEduc, 14, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $fEduc = DB::table('formal_educations')->where('user_id', '=', $session)
                                ->select('degree')
                                ->get();
                                echo substr($fEduc, 14, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $fEduc = DB::table('formal_educations')->where('user_id', '=', $session)
                                ->select('title')
                                ->get();
                                echo substr($fEduc, 11, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $fEduc = DB::table('formal_educations')->where('user_id', '=', $session)
                                ->select('college')
                                ->get();
                                echo substr($fEduc, 13, -3);
                        @endphp
                        </td>
            
                      </tr>
               
            </tbody>
        </table>

<!--End formal education-->

<br>

<!--Complement education-->

        <center><h2>Complement Education</h2></center>
        <p>(relate in chronological order the courses or workshops held as a consolidation of the knowledge acquired in their formal education. * It is necessary to attach supports *)</p>
        
        <table class="table" >
            <thead >
              <tr >
                <th scope="col" style="border:solid 0.5px gray;">Modality  </th>
                <th scope="col" style="border:solid 0.5px gray;">Course name</th>
                <th scope="col" style="border:solid 0.5px gray;">Hourlyintensity</th>
                <th scope="col" style="border:solid 0.5px gray;">Training entity</th>   
                <th scope="col" style="border:solid 0.5px gray;">Start Date</th> 
                <th scope="col" style="border:solid 0.5px gray;">End Date</th>

                
              </tr>
            </thead>

            <tbody>
              
                      <tr>
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $compEduc = DB::table('complement_educations')->where('user_id', '=', $session)
                                ->select('modality')
                                ->get();
                                echo substr($compEduc, 14, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $compEduc = DB::table('complement_educations')->where('user_id', '=', $session)
                                ->select('course')
                                ->get();
                                echo substr($compEduc, 12, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $compEduc = DB::table('complement_educations')->where('user_id', '=', $session)
                                ->select('hourlyintensity')
                                ->get();
                                echo substr($compEduc, 21, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $compEduc = DB::table('complement_educations')->where('user_id', '=', $session)
                                ->select('entity')
                                ->get();
                                echo substr($compEduc, 12, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $compEduc = DB::table('complement_educations')->where('user_id', '=', $session)
                                ->select('startDate')
                                ->get();
                                echo substr($compEduc, 15, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                         @php 
                            
                                $compEduc = DB::table('complement_educations')->where('user_id', '=', $session)
                                ->select('endDate')
                                ->get();
                                echo substr($compEduc, 13, -3);
                        @endphp
                        </td>
            
                      </tr>
               
              
            </tbody>
        </table>
<!--End complement education-->


 <br>

 <!--Work experience-->


        <center><h2>Work experience</h2></center>
        <center> <h4>Related to the position held</h4></center>

        <table class="table" >
            <thead >
              <tr >
                <th scope="col" style="border:solid 0.5px gray;">Company  </th>
                <th scope="col" style="border:solid 0.5px gray;">Start Date</th>
                <th scope="col" style="border:solid 0.5px gray;">End Date</th>
                <th scope="col" style="border:solid 0.5px gray;">Duration (months)</th>   
                <th scope="col" style="border:solid 0.5px gray;">Immediate boss</th> 
                <th scope="col" style="border:solid 0.5px gray;">Company Phone</th>
                <th scope="col" style="border:solid 0.5px gray;">Principal Functions</th>    
              </tr>
            </thead>

            <tbody>
               
                      <tr>
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $wExp = DB::table('work_experiences')->where('user_id', '=', $session)
                                ->select('company')
                                ->get();
                                echo substr($wExp, 13, -3);
                        @endphp
                        </td>

                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $wExp = DB::table('work_experiences')->where('user_id', '=', $session)
                                ->select('startDate')
                                ->get();
                                echo substr($wExp, 15, -3);
                        @endphp
                        
                        </td>

                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $wExp = DB::table('work_experiences')->where('user_id', '=', $session)
                                ->select('endDate')
                                ->get();
                                echo substr($wExp, 15, -3);
                        @endphp

                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $wExp = DB::table('work_experiences')->where('user_id', '=', $session)
                                ->select('duration')
                                ->get();
                                echo substr($wExp, 14, -3);
                        @endphp
                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $wExp = DB::table('work_experiences')->where('user_id', '=', $session)
                                ->select('boss')
                                ->get();
                                echo substr($wExp, 10, -3);
                        @endphp

                        </td>
                        
                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $wExp = DB::table('work_experiences')->where('user_id', '=', $session)
                                ->select('phone')
                                ->get();
                                echo substr($wExp, 11, -3);
                        @endphp

                        </td>

                        <td scope="row" style="border:solid 0.5px gray;">
                        @php 
                            
                                $wExp = DB::table('work_experiences')->where('user_id', '=', $session)
                                ->select('functions')
                                ->get();
                                echo substr($wExp, 15, -3);
                        @endphp
                        </td>
                      </tr>                
            </tbody>
        </table>

 <!--End Work experience-->


 <br>

<!--Languages-->


        <center><h2>Languages ​​you master</h2></center>
        <p>(If it is certified, attach support)</p>

        <table class="table" >
            <thead >
              <tr >
                <th scope="col" style="border:solid 0.5px gray;">Language</th>
                <th scope="col" style="border:solid 0.5px gray;">Level</th>
                <th scope="col" style="border:solid 0.5px gray;">Institute</th>
              </tr>
            </thead>

            <tbody>
            
                <tr>
                <td scope="row" style="border:solid 0.5px gray;">
                @php 
                    
                        $lang = DB::table('languages')->where('user_id', '=', $session)
                        ->select('language')
                        ->get();
                        echo substr($lang, 14, -3);
                @endphp
                
                </td>
                
                <td scope="row" style="border:solid 0.5px gray;">
                @php 
                    
                        $lang = DB::table('languages')->where('user_id', '=', $session)
                        ->select('level')
                        ->get();
                        echo substr($lang, 11, -3);
                @endphp
                
                </td>
                
                <td scope="row" style="border:solid 0.5px gray;">
               
                @php 
                    
                        $lang = DB::table('languages')->where('user_id', '=', $session)
                        ->select('institute')
                        ->get();
                        echo substr($lang, 15, -3);
                @endphp
               </td>
                </tr>
            </tbody>
        </table>   
<!--End Languages-->
<!--a type="button" href="/resumes/uploadFiles" class="btn btn-success">Back</a-->
<input type="button" class="btn btn-primary" value="Imprimir" onclick="window.print()">
</div> <!--End div container-->

@endsection