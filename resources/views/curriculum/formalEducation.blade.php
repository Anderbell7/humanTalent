@extends('layout.layout')

@section('content')
<form action="/curriculum" method="POST" role="form">
       
    {{ csrf_field() }}

        <div class="row clearfix">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                    <thead>
                        <tr  > 
                            <th colspan="6"><h2 class="aling-center" valign="middle" >Formal Education  <br><p style="font-size: 14px; text-align: justify;">(Relacione en orden cronológico los estudios realizados, del más reciente al más antiguo, señalando alguna de las siguiente modalityes académicas: BCH-bachillerato, TC-técnico, TL-tecnólogo, UN-universitaria, DP-diplomado, ES-especialización, MG-maestría o magister, DOC-doctorado o PHD. *Es necesario anexar soportes*)     </p></h2></th>
                        </tr>
                        <tr  valign="middle" cellspacing="2">
                            <th class="text-center" rowspan="2">
                            MODALITY
                            </th>
                            <th class="text-center" rowspan="2">
                            APPROVED GRADES 
                            </th>
                            <th colspan="2" class="text-center">
                            GRADUATE
                            </th>
                            
                            <th class="text-center" rowspan="2"> 
                            OBTAINED TITLE
                            </th>
                            <th class="text-center" rowspan="2">
                            UNIVERSITY OR COLLEGE
                            </th>
                           
                                    
                        </tr>
                        <tr class="aling-center" valign="middle" color="while"> 
                            
                            <th><small> YES / DATE </small></th>
                            <th><small>NO (ongoing or postponed)</small></th>
                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr id='addr3' data-id="0" class="hidden">
                            <td data-name="modality">
                                <input type="text" name='modality' class="form-control"/>
                            </td>
                            <td data-name="desc1">
                                <input type="text" name="grade" class="form-control"/>
                            </td>
                            <td data-name="desc2">
                                <input type="date"  name="graduate" class="form-control">
                            </td>
                            <td data-name="desc3">
                                <input type="text"  name="deferred" class="form-control">
                            </td>
                            <td data-name="desc4">
                                <input type="text"  name="title" class="form-control">
                            </td>
                            <td data-name="desc5">
                                <input type="text"  name="college"  class="form-control">
                            </td> 
                            
                            <td data-name="del">
                            <button type="button" name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'>-</button>
                            <button type="button" name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'>+</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>
                <br>
                <a type="button" href="/curriculum/complementEducation" class="btn btn-warning">Back</a>
                <a type="button" href="/curriculum/languages" class="btn btn-warning">Next</a>
                <button type="submit" class="btn btn-primary">Send</button> 
                

            
    </form>
@stop


