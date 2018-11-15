@extends('layout.layout')

@section('content')

<form action="/curriculum" method="POST" role="form">

    {{ csrf_field() }}

        <div class="row clearfix">
            <div class="col-md-32 table-responsive">
                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                    <thead>
                        <tr align="center" valign="middle"> 
                             <th colspan="7"><h2 class="aling-center" align="center">Acquired Skills</h2></th>
                        </tr>
                    </thead>
                </table>           
        
                <table class="table table-md">
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><input type="checkbox" name="skills[]" value="Analysis"> Analysis</td>
                            <td><input type="checkbox" name="skills[]" value="Critical thinking"> Critical thinking</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td><input type="checkbox" name="skills[]" value="Assertive communication"> Assertive communication</td>
                            <td><input type="checkbox" name="skills[]" value="Strategic thinking"> Strategic thinking</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td><input type="checkbox" name="skills[]" value="Empowerment"> Empowerment</td>
                            <td><input type="checkbox" name="skills[]" value="Planning and organization"> Planning and organization</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td><input type="checkbox" name="skills[]" value="Innovation and creativity"> Innovation and creativity</td>
                            <td><input type="checkbox" name="skills[]" value="Negotiation Power"> Negotiation Power</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td><input type="checkbox" name="skills[]" value="Leadership"> Leadership</td>
                            <td><input type="checkbox" name="skills[]" value="Customer service"> Customer service</td>       
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td><input type="checkbox" name="skills[]" value="Group management"> Group management</td>
                            <td><input type="checkbox" name="skills[]" value="Teamwork"> Teamwork</td>       
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
    <a type="button" href="/curriculum/principalFunctions" class="btn btn-warning">Back</a>
    <a type="button" href="/curriculum/formalEducation" class="btn btn-warning">Next</a>
    <button type="submit" class="btn btn-success">Submit</button>
</form>

@stop