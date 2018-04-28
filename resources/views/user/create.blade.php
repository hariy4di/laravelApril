@extends('layout')
@section('title','Form todo')
@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Bordered Table</h3>
        </div>
        <div class="box-body">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ Form::open(['url'=>'todo','class'=>'form-horizontal'])}}


    <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
            {{ Form::text('name',null,['placeholder'=>'Todo Title','class'=>'form-control'])}}
            </div>
    </div>       

    <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
            {{ Form::email('name',null,['placeholder'=>'Todo Title','class'=>'form-control'])}}
            </div>
    </div>  

    <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
            {{ Form::password('name',['placeholder'=>'Todo Title','class'=>'form-control'])}}
            </div>
    </div>  
    <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                    {{ Form::submit('Save Todo',['class'=>'btn btn-success'])}}
                    {{ link_to('/todo','Back',['class'=>'btn btn-info'])}}

            </div>
    </div>  
    
    

    {{ Form::close() }}
        </div>
</div>
@endsection()