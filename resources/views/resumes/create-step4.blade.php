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
    <h1>Formal Education</h1>
    <p> (List in chronological order the studies carried out, from the most recent to the oldest, indicating one of the following academic modalities: BCH-baccalaureate, TC-technician, TL-technologist, UN-university, DP-diploma, ES-specialization, MG-mastery or magister, DOC-doctorate or PHD. * It is necessary to attach supports *) </p>

    <hr>
    <form action="/resumes/create-step4" method="post">
        {{ csrf_field() }}
        <div style="display: none">
            <label for="title">id</label>
            <input type="text" value="{{ auth()->user()->id }}" class="form-control" id="user_id"  name="user_id">
        </div>
        <div class="form-group">
            <label for="modality">Modality</label>
            <input type="text" value="{{{ $curriculum->modality or '' }}}" class="form-control" id="taskModality"  name="modality">
        </div>
        <div class="form-group">
            <label for="grade">Approved grades</label>
            <input type="text" value="{{{ $curriculum->grade or '' }}}" class="form-control" id="taskGrade"  name="grade">
        </div>
        <div class="form-group">
            <label for="description">Graduate</label>
            <select class="form-control" name="graduate">
                <option {{{ (isset($curriculum->graduate) && $curriculum->graduate == 'Yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                <option {{{ (isset($curriculum->graduate) && $curriculum->graduate == 'Ongoing') ? "selected=\"selected\"" : "" }}}>Ongoing</option>
                <option {{{ (isset($curriculum->graduate) && $curriculum->graduate == 'Postponed') ? "selected=\"selected\"" : "" }}}>Postponed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="degree">date of degree</label>
            <input type="date"  value="{{{ $curriculum->degree or '' }}}" class="form-control" id="taskDegree" name="degree"/>
        </div>
        <div class="form-group">
            <label for="title">Obtained title</label>
            <input type="text"  value="{{{ $curriculum->title or '' }}}" class="form-control" id="taskTitle" name="title"/>
        </div>

        <div class="form-group">
            <label for="college">University or College</label>
            <input type="text" value="{{{ $curriculum->college or '' }}}" class="form-control" id="taskCollege"  name="college">
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
        <a type="button" href="/resumes/create-step3" class="btn btn-success">Back</a>
        <!--a type="button" href="/resumes/create-step5" class="btn btn-warning">Next</a-->
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection