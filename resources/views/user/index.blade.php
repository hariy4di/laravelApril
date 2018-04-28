@extends('layout')
@section('title','List User')
@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Bordered Table</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th></th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            {{ link_to('user/'.$user->id.'/edit','Edit',['class'=>'btn btn-warning']) }}

                                {{ Form::open(['url'=>'user/'.$user->id,'method'=>'delete','style'=>'float:right',
                                'onclick'=>"return confirm('Are you sure you want to delete this item?');"])}}
                                {{ Form::submit('delete',['class'=>'btn btn-success'])}}
                                {{ Form::close()}}
                                
                        </td>
                    </tr>
                @endforeach
            </table>
            <hr>
            <a href="/user/create" class="btn btn-danger btn-sm">Create New User</a>
        </div>
</div>



    
@endsection()