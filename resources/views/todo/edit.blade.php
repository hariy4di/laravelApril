@extends('layout')
@section('title','Form todo')
@section('content')
    <h2>Form Update Todo</h2>

    @include('share.validation_error')

    {{ Form::model($todo,['url'=>'todo/'.$todo->id,'method'=>'put'])}}
    @include('todo.form')
    {{ Form::submit('Update Todo')}}
    {{ link_to('/todo','Back')}}
    {{ Form::close() }}

@endsection()