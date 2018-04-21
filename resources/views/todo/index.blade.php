@extends('layout')
@section('title','List Todo')
@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Bordered Table</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                @foreach($todos as $todo)
                    <tr>
                        <td>{{ $todo }}</td>
                        <td>sample text</td>
                        <td>password</td>
                    </tr>
                @endforeach
            </table>
            <hr>
            <a href="/todo/create" class="btn btn-danger btn-sm">Create New Todo</a>
        </div>
</div>



    
@endsection()