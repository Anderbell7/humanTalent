@extends('layout.layout')

@section('content')

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        You are logged in!
    </div>
    
    <h1>Personal Information</h1>
    <hr>

    <form action="/resumes/create-step1" method="post">
        {{ csrf_field() }}
        
        <div style="display: none">
            <label for="title">id</label>
            <input type="text" value="{{ auth()->user()->id }}" class="form-control" id="user_id"  name="user_id">
        </div>
        
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" value="{{{ $curriculum->name or '' }}}" class="form-control" id="taskTitle"  name="name">
        </div>
        <div class="form-group">
            <label for="lastName">Last name</label>
            <input type="text" value="{{{ $curriculum->lastName or '' }}}" class="form-control" id="taskTitle"  name="lastName">
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="date" value="{{{ $curriculum->birthdate or '' }}}" class="form-control" id="taskBirthdate"  name="birthdate">
        </div>
        <div class="form-group">
            <label for="identity">Document number</label>
            <input type="text" value="{{{ $curriculum->identity or '' }}}" class="form-control" id="identity"  name="identity">
        </div>
        <div class="form-group">
            <label for="civilStatus">Civil Status</label>
            <select class="form-control" name="civilStatus">
                <option {{{ (isset($curriculum->civilStatus) && $curriculum->civilStatus == 'Single') ? "selected=\"selected\"" : "" }}}>Single</option>
                <option {{{ (isset($curriculum->civilStatus) && $curriculum->civilStatus == 'Married') ? "selected=\"selected\"" : "" }}}>Married</option>
                <option {{{ (isset($curriculum->civilStatus) && $curriculum->civilStatus == 'Free union') ? "selected=\"selected\"" : "" }}}>Free union</option>
                <option {{{ (isset($curriculum->civilStatus) && $curriculum->civilStatus == 'Widower') ? "selected=\"selected\"" : "" }}}>Widower</option>
                <option {{{ (isset($curriculum->civilStatus) && $curriculum->civilStatus == 'Divorced') ? "selected=\"selected\"" : "" }}}>Divorced</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Residence address</label>
            <input type="text"  value="{{{ $curriculum->address or '' }}}" class="form-control" id="taskAddress" name="address"/>
        </div>
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="text"  value="{{{ $curriculum->phone or '' }}}" class="form-control" id="taskPhone" name="phone" >
        </div>
        <div class="form-group">
            <label for="cellPhone">Cell Phone</label>
            <input type="text"  value="{{{ $curriculum->cellPhone or '' }}}" class="form-control" id="taskCellPhone" name="cellPhone">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text"  value="{{{ $curriculum->email or '' }}}" class="form-control" id="taskEmail" name="email">
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
        <!--<a type="button" href="/resumes/create-step2" class="btn btn-warning">Next</a>-->
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection