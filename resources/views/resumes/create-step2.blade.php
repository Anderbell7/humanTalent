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
    
    <h1>Acquired Skills</h1>
    <hr>
    <form action="/resumes/create-step2" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="analysis">Analysis</label>
            <input type="checkbox" value="analysis" class="form-control" id="taskAnalysis"  name="skills[]">
        </div>
        <hr>
        <div class="form-group">
            <label for="criticalThinking">Critical thinking</label>
            <input type="checkbox" value="Critical thinking" class="form-control" id="taskCriticalThinking"  name="skills[]">
        </div>
<!--         <div class="form-group">
            <label for="criticalThinking">Critical thinking</label>
            <input type="checkbox" value="{{{ $curriculum->criticalThinking or '' }}}" class="form-control" id="taskCriticalThinking"  name="skills[]">
        </div> -->
        <hr>
        <div class="form-group">
            <label for="assertiveCommunication">Assertive communication</label>
            <input type="checkbox" value="Assertive communication" class="form-control" id="taskAssertiveCommunication"  name="skills[]">
        </div>
        <hr>
        <div class="form-group">
            <label for="strategicThinking">Strategic thinking</label>
            <input type="checkbox" value="Strategic thinking" class="form-control" id="taskStrategicThinking"  name="skills[]">
        </div>
        <hr>
        <div class="form-group">
            <label for="empowerment">Empowerment</label>
            <input type="checkbox"  value="Empowerment" class="form-control" id="taskEmpowerment" name="skills[]"/>
        </div>
        <hr>
        <div class="form-group">
            <label for="planning">Planning and organization</label>
            <input type="checkbox"  value="Planning and organization" class="form-control" id="taskPlanning" name="skills[]">
        </div>
        <hr>
        <div class="form-group">
            <label for="creativity">Innovation and creativity</label>
            <input type="checkbox"  value="Innovation and creativity" class="form-control" id="taskCreativity" name="skills[]"/>
        </div>
        <hr>
        <div class="form-group">
            <label for="negotiation">Negotiation Power</label>
            <input type="checkbox"  value="Negotiation Power" class="form-control" id="taskNegotiation" name="skills[]">
        </div>
        <hr>
        <div class="form-group">
            <label for="leadership">Leadership</label>
            <input type="checkbox"  value="Leadership" class="form-control" id="taskLeadership" name="skills[]"/>
        </div>
        <hr>
        <div class="form-group">
            <label for="customerService">Customer service</label>
            <input type="checkbox"  value="Customer service" class="form-control" id="taskCustomerService" name="skills[]">
        </div>
        <hr>
        <div class="form-group">
            <label for="groupManagement">Group management</label>
            <input type="checkbox"  value="Group management" class="form-control" id="taskGroupManagement" name="skills[]"/>
        </div>
        <hr>
        <div class="form-group">
            <label for="teamwork">Teamwork</label>
            <input type="checkbox" value="Teamwork" class="form-control" id="taskTeamwork" name="skills[]">
        </div>
        <hr>
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
        <a type="button" href="/resumes/create-step1" class="btn btn-success">Back</a>
       <!-- <a type="button" href="/resumes/create-step3" class="btn btn-warning">Next</a> -->
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection