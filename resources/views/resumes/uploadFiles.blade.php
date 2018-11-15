@extends('layout.layout')

@section('content')
    <h1>Attach documents</h1>
    <hr>
        <form action="/resumes/uploadFiles" method="post">    
            {{ csrf_field() }}
            <div class="row clearfix">
                <div class="form-group">
                    <label for="attach">Select</label>
                    <select class="form-control" name="attach">
                        <option value="{{$CVFolder}}" {{{ (isset($product->attach) && $product->attach == 'Curriculum') ? "selected=\"selected\"" : "" }}}>Curriculum vitae</option>
                        <option value="{{$PDFolder}}" {{{ (isset($product->attach) && $product->attach == 'Identification') ? "selected=\"selected\"" : "" }}}>Identification document</option>
                        <option value="{{$SCFolder}}" {{{ (isset($product->attach) && $product->attach == 'certFormalEducation') ? "selected=\"selected\"" : "" }}}>Certificate of formal education</option>
                        <option value="{{$SCCFolder}}" {{{ (isset($product->attach) && $product->attach == 'certComplementEducation') ? "selected=\"selected\"" : "" }}}>Certificate of complement education</option>
                        <option value="{{$WEFolder}}" {{{ (isset($product->attach) && $product->attach == 'workCertificate') ? "selected=\"selected\"" : "" }}}>Work certificate</option>
                        <option value="{{$LCFolder}}" {{{ (isset($product->attach) && $product->attach == 'certLanguages') ? "selected=\"selected\"" : "" }}}>certified languages</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lastName">--</label>
                    <br>
                    <input action="../../../app/Http/Controllers/UploadFilesController.php" type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="form-group">
                    <label for="lastName">--</label>
                    <br>
                    <input type="submit" value="Upload" name="submit">
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
        <a type="button" href="/resumes/create-step7" class="btn btn-warning">Back</a>

        </form>
@stop