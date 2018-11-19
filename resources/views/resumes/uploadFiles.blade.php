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
    
    <h1>Attach documents</h1>
    <hr>
        <form method="post" action="uploadFiles" enctype="multipart/form-data">    
            {{ csrf_field() }}
    
            @php
            
            
                #Folder names:
                $CVFolder = 'curriculum';
                $PDFolder = 'personal info';
                $SCFolder = 'formal education';
                $SCCFolder = 'complement education';
                $WEFolder = 'work certificate';
                $LCFolder = 'languages';
            
            @endphp
            
            <div class="row clearfix">
                <div class="form-group">
                
                    <label for="attach">Select files:</label>
                    <select class="form-control" name="attach">
                        <option value="{{$CVFolder}}" {{{ (isset($docs->attach) && $docs->attach == 'Curriculum') ? "selected=\"selected\"" : "" }}}>Curriculum vitae</option>
                        <option value="{{$PDFolder}}" {{{ (isset($docs->attach) && $docs->attach == 'Identification') ? "selected=\"selected\"" : "" }}}>Identification document</option>
                        <option value="{{$SCFolder}}" {{{ (isset($docs->attach) && $docs->attach == 'certFormalEducation') ? "selected=\"selected\"" : "" }}}>Certificate of formal education</option>
                        <option value="{{$SCCFolder}}" {{{ (isset($docs->attach) && $docs->attach == 'certComplementEducation') ? "selected=\"selected\"" : "" }}}>Certificate of complement education</option>
                        <option value="{{$WEFolder}}" {{{ (isset($docs->attach) && $docs->attach == 'workCertificate') ? "selected=\"selected\"" : "" }}}>Work certificate</option>
                        <option value="{{$LCFolder}}" {{{ (isset($docs->attach) && $docs->attach == 'certLanguages') ? "selected=\"selected\"" : "" }}}>Certificate of languages</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="file"></label>
                    <br>
                    <input type="file" name="file">
                </div>
                <div class="form-group">
                    <label for="buttons"></label>
                    <br>
                    <a type="button" href="/resumes/create-step7" class="btn btn-warning">Back</a>
                    <input type="submit" class="btn btn-primary" value="Upload" name="submit">
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
       

        </form>
@stop