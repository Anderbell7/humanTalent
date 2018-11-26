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
    
    <h1> Main functions in the Company</h1>
    <hr>
    <form action="/resumes/create-step3" method="post">
        {{ csrf_field() }}
        <div style="display: none">
            <label for="title">id</label>
            <input type="text" value="{{ auth()->user()->id }}" class="form-control" id="user_id"  name="user_id">
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
        <a type="button" href="/resumes/create-step2" class="btn btn-success">Back</a>
        <!--<a type="button" href="/resumes/create-step4" class="btn btn-warning">Next</a>-->
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection