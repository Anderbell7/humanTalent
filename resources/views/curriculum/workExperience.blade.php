@extends('layout.layout')

@section('content')
    <form action="/curriculum" method="POST" role="form">
       
        {{ csrf_field() }}
            <div class="row clearfix">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                        <thead>
                        <tr class="aling-center" valign="middle"> 
                            <th colspan="7"><h2 class="aling-center" >Work experience related to the position held</h2></th>
                        </tr>
                        <tr  valign="middle" cellspacing="2">
                            <th class="text-center" >
                            COMPANY
                            </th>
                            <th class="text-center" >
                            START DATE
                            </th>
                            <th class="text-center">
                            END DATE
                            </th>
                            <th class="text-center" >
                            DURATION (months)
                            </th>
                            <th class="text-center" > 
                            IMMEDIATE BOSS
                            </th>
                            <th class="text-center" >
                            COMPANY PHONE
                            </th>
                            <th class="text-center" >
                            PRINCIPAL FUNCTIONS
                            </th>                         
                        </tr>                           
                        </thead>
                        <tbody>
                            <tr id='addr5' data-id="0" class="hidden">

                                <td data-name="desc0">
                                    <input type="text" name='company'  class="form-control"/>
                                </td>
                                <td data-name="desc1">
                                    <input type="date" name='startDate' class="form-control"/>
                                </td>
                                <td data-name="desc2">
                                    <input type="date"  name="endDate"  class="form-control">
                                </td>
                                <td data-name="desc3">
                                    <input type="text"  name="duration"  class="form-control" min="1">
                                </td>
                                <td data-name="desc4">
                                    <input type="text"  name="boss"  class="form-control">
                                </td>
                                <td data-name="desc5">
                                    <input type="text"  name="phone"  class="form-control">
                                </td>
                                <td data-name="desc6">
                                    <input type="text"  name="functions" class="form-control">
                                </td>
                                        
                                <td data-name="del">
                                <button type="button" id="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'>-</button>
                                <button type="button" id="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'>+</button>
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



