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
    
    <h1>Languages ​​you master</h1>
    <hr>
    <form action="/resumes/create-step7" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" value="{{{ $curriculum->language or '' }}}" class="form-control" id="taskLanguage"  name="language">
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <input type="text" value="{{{ $curriculum->level or '' }}}" class="form-control" id="taskLevel"  name="level">
        </div>
        <div class="form-group">
            <label for="institute">Institute</label>
            <input type="text" value="{{{ $curriculum->institute or '' }}}" class="form-control" id="taskInstitute"  name="institute">
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
        <a type="button" href="/resumes/create-step6" class="btn btn-success">Back</a>
        <!--a type="button" href="/resumes/uploadFiles" class="btn btn-warning">Next</a-->
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection