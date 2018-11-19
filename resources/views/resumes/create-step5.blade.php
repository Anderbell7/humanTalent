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
    
    <h1>Complement Education</h1>
    <hr>
    <form action="/resumes/create-step5" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="modality">Modality</label>
            <input type="text" value="{{{ $curriculum->modality or '' }}}" class="form-control" id="taskModality"  name="modality">
        </div>
        <div class="form-group">
            <label for="course">Course name</label>
            <input type="text" value="{{{ $curriculum->course or '' }}}" class="form-control" id="taskCourse"  name="course">
        </div>
        <div class="form-group">
            <label for="hourlyintensity">Hourlyintensity</label>
            <input type="text" value="{{{ $curriculum->hourlyintensity or '' }}}" class="form-control" id="taskHourlyintensity"  name="hourlyintensity">
        </div>
        <div class="form-group">
            <label for="entity">Training entity</label>
            <input type="text" value="{{{ $curriculum->entity or '' }}}" class="form-control" id="taskEntity"  name="entity">
        </div>
        <div class="form-group">
            <label for="startDate">Start Date</label>
            <input type="date"  value="{{{ $curriculum->startDate or '' }}}" class="form-control" id="taskStartDate" name="startDate"/>
        </div>
        <div class="form-group">
            <label for="endDate">End Date</label>
            <input type="date"  value="{{{ $curriculum->endDate or '' }}}" class="form-control" id="taskEndDate" name="endDate"/>
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
        <a type="button" href="/resumes/create-step4" class="btn btn-success">Back</a>
        <!--a type="button" href="/resumes/create-step6" class="btn btn-warning">Next</a-->
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection