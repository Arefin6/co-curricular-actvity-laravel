@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update User: 
        </div>
        <div class="panel-body">
            <form action="{{ route('user.update', ['id' => $users->id]) }}" method="post"}}>
       
                {{ csrf_field() }}
                

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control"value="{{$users->name}}">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$users->email}}">
                </div>
                <div class="form-group">
                    <label for="name">password</label>
                    <input type="password" name="password" class="form-control"value="{{$users->password}}">
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update User</button>
                    </div> 
                </div>
            </form>
        </div>
    </div>
@stop