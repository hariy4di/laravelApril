@extends('layout')
@section('title','Form todo')
@section('content')
    <h2>Form Todo</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ Form::open(['url'=>'todo'])}}
    {{ Form::text('name',null,['placeholder'=>'Todo Title'])}}
    {{ Form::email('email',null,['placeholder'=>'Todo Title'])}}
    {{ Form::password('password',null,['placeholder'=>'Todo Title'])}}
    
    {{ Form::submit('Save Todo')}}
    {{ link_to('/todo','Back')}}
    {{ Form::close() }}

@endsection()