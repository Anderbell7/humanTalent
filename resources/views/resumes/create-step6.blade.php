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
    
    <h1>Work experience</h1>
    <h4>Related to the position held</h4>
    <hr>
    <form action="/resumes/create-step6" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" value="{{{ $curriculum->company or '' }}}" class="form-control" id="taskCompany"  name="company">
        </div>
        <div class="form-group">
            <label for="startDate">Start Date</label>
            <input type="date" value="{{{ $curriculum->startDate or '' }}}" class="form-control" id="taskStartDate"  name="startDate">
        </div>
        <div class="form-group">
            <label for="endDate">End Date</label>
            <input type="date"  value="{{{ $curriculum->endDate or '' }}}" class="form-control" id="taskEndDate" name="endDate"/>
        </div>
        <div class="form-group">
            <label for="duration">Duration (months)</label>
            <input type="text" value="{{{ $curriculum->duration or '' }}}" class="form-control" id="taskDuration"  name="duration">
        </div>
        <div class="form-group">
            <label for="boss">Immediate boss</label>
            <input type="text" value="{{{ $curriculum->boss or '' }}}" class="form-control" id="taskBoss"  name="boss">
        </div>
        <div class="form-group">
            <label for="phone">Company Phone</label>
            <input type="text"  value="{{{ $curriculum->phone or '' }}}" class="form-control" id="taskPhone" name="phone" >
        </div>
        <div class="form-group">
            <label for="functions">Principal Functions</label>
            <input type="text" value="{{{ $curriculum->functions or '' }}}" class="form-control" id="taskFunctions"  name="functions">
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
        <a type="button" href="/resumes/create-step5" class="btn btn-success">Back</a>
        <!--a type="button" href="/resumes/create-step7" class="btn btn-warning">Next</a-->
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection