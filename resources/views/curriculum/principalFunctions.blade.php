@extends('layout.layout')

@section('content')
    <form action="/curriculum" method="POST" role="form">
       
        {{ csrf_field() }}
       
            <div class="row clearfix">
                <div class="col-md-32 table-responsive">
                    <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                        <thead>
                        <tr align="center" valign="middle"> 
                            <th colspan="8">
                                <h2 align="center">
                                Main functions in the Company
                                </h2>
                            </th>
                        </tr>                                   
                        </thead>
                        <tbody>
                            <tr id='addr1' data-id="0" class="hidden">
                                <td data-name="functions">
                                    <input type="text" class="form-control" id="taskFunctions" name="functions" value="{{{ $principalFunctions->functions or '' }}}" >   
                                </td>

                                <td data-name="del">
                                    <button type="button" id="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'>-</button>
                                    <button type="button" id="del0" class='btn btn-primary glyphicon glyphicon-remove row-remove'>+</button>    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <a type="button" href="/curriculum/personalInfo" class="btn btn-warning">Back</a>
                <a type="button" href="/curriculum/acquiredSkills" class="btn btn-warning">Next</a>
                <button type="submit" class="btn btn-primary">Send</button> 
                <br>
                <br>
            </div> 
            
    </form>
@stop
