@extends('layout')
@section('title','List Todo')
@section('content')
    <h2>List Todo</h2>
    <ul>
    @foreach($todos as $todo)
        <li>{{ $todo }}</li>
    @endforeach
    </ul>

 <a href="/todo/create">Create New Todo</a>
    
@endsection()