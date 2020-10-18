@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Edit Student Profile 
        </div>
        <div class="panel-body">
            <form  action="{{ route('students.update', ['id' => $student->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$student->name}}">
                </div>
				<div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control"
                    value="{{$student->email}}">
                </div>
				<div class="form-group">
                    <label for="stu_id">Student Id:</label>
                    <input type="text" name="stu_id" class="form-control"
                    value="{{$student->stu_id}}">
                </div>
				<div class="form-group">
                    <label for="img">Student image</label>
                    <input type="file" name="img" class="form-control"
                    value="{{$student->img}}">
                </div>
				<select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
				<div class="form-group">
                    <label for="dept">Department:</label>
                    <input type="text" name="dept" class="form-control"value="{{$student->dept}}">
                </div>
                
                
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Student</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@stop