@extends('layout.layout')

@section('content')
    <form action="/curriculum" method="POST" role="form">
    
        {{ csrf_field() }}

            <div class="row clearfix">
                <div class="col-md-32 table-responsive">
                    <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                        <thead>
                            <tr align="center" valign="middle"> 
                                <th colspan="18"><h2 class="aling-center" align="center">Languages ​​you master<br><p style="font-size: 14px; text-align: center;">(If you are certified, attach support)</p></h2></th>
                                </tr>
                                <tr align="center" valign="middle" cellspacing="2">
                                    <th class="text-center" >
                                    LANGUAGE
                                    </th>
                                    <th class="text-center" >
                                    LEVEL
                                    </th>
                                    <th class="text-center">
                                    INSTITUTE
                                    </th>  
                                </tr>
                            
                        </thead>
                        <tbody>
                            <tr id='addr6' data-id="0" class="hidden">

                                <td data-name="language">
                                    <input type="text" name='language'  class="form-control"/>
                                </td>
                                <td data-name="desc1">
                                    <input type="text" name='level' class="form-control"/>
                                </td>
                                <td data-name="desc2">
                                    <input type="text"  name='institute'  class="form-control">
                                </td>
                                

                                <td data-name="del">
                                    <button type="button" name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'>-</button>
                                    <button type="button" name="del0" class='btn btn-primary glyphicon glyphicon-remove row-remove'>+</button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <a type="button" href="/curriculum/workExperience" class="btn btn-warning">Back</a>
            <a type="button" href="/curriculum/uploadFiles" class="btn btn-warning">Next</a>
            <button type="submit" class="btn btn-primary">Send</button>        

    </form>
@stop


