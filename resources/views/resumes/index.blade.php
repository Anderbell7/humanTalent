@extends('layout.layout')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Last name</th>
            <th scope="col">Document Number</th>
            <th scope="col">position</th>
            <th scope="col">cellPhone</th>
            <th scope="col">View CV</th>
        </tr>
        </thead>
        <tbody>
        @foreach($resumes as $curriculum)
            <tr>
                <th scope="row">{{$curriculum->id}}</th>
                <td><a href="/tasks/{{$curriculum->id}}">{{$curriculum->title}}</a></td>
                <td>{{$curriculum->description}}</td>
                <td>{{$curriculum->company}}</td>
                <td>{{$curriculum->company}}</td>
                <td>{{$curriculum->amount}}</td>
                <td>{{$curriculum->available ? 'Yes' : 'No'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection