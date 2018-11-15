@extends('layout.layout')

@section('content')

<h3 class="text-center">Personal Information</h3>
<br>
<form action="/curriculum" method="POST" role="form">
    
        {{ csrf_field() }}
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="taskName" name="name" value="{{{ $personalInfo->name or '' }}}" >   
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="taskLastName" name="lastName" value="{{{ $personalInfo->lastName or '' }}}" >   
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="birthdate">Birthdate</label>
            <input type="date" class="form-control" id="taskBirthdate" name="birthdate" value="{{{ $personalInfo->birthdate or '' }}}" >   
        </div>
        <div class="form-group col-md-6">
            <label for="identity">Identity document</label>
            <input type="text" class="form-control" id="taskIdentity" name="identity" value="{{{ $personalInfo->identity or '' }}}" >   
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="civilStatus">Civil Status</label>
            <select class="form-control" name="civilStatus">
                <option {{{ (isset($personalInfo->civilStatus) && $personalInfo->civilStatus == 'Single') ? "selected=\"selected\"" : "" }}}>Single</option>
                <option {{{ (isset($personalInfo->civilStatus) && $personalInfo->civilStatus == 'Married') ? "selected=\"selected\"" : "" }}}>Married</option>
                <option {{{ (isset($personalInfo->civilStatus) && $personalInfo->civilStatus == 'Free union') ? "selected=\"selected\"" : "" }}}>Free union</option>
                <option {{{ (isset($personalInfo->civilStatus) && $personalInfo->civilStatus == 'Widower') ? "selected=\"selected\"" : "" }}}>Widower</option>
                <option {{{ (isset($personalInfo->civilStatus) && $personalInfo->civilStatus == 'Divorced') ? "selected=\"selected\"" : "" }}}>Divorced</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="address">Residence address</label>
            <input type="text" class="form-control" id="taskAddress" name="address" value="{{{ $personalInfo->address or '' }}}" >   
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="phone">Phone number</label>
            <input type="text" class="form-control" id="taskPhone" name="phone" value="{{{ $personalInfo->phone or '' }}}" >   
        </div>
        <div class="form-group col-md-4">
            <label for="cellPhone">Cell Phone</label>
            <input type="text" class="form-control" id="taskCellPhone" name="cellPhone" value="{{{ $personalInfo->cellPhone or '' }}}" >   
        </div>
        <div class="form-group col-md-4">
            <label for="cellPhone">E-mail</label>
            <input type="email" class="form-control" id="taskEmail" name="email" value="{{{ $personalInfo->email or '' }}}" >   
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
        <a type="button" href="/curriculum/principalFunctions" class="btn btn-warning">Next</a>
        <button type="submit" class="btn btn-primary">Send</button>  

</form>

@stop