@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update category: 
        </div>
        <div class="panel-body">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post"}}>
       
                {{ csrf_field() }}
                

                <div class="form-group">
                    <label for="name">Name</label>
                    <select name="name" class="form-control" id="" value = "{{$category->name}}">
                    
                    	<option value="Music">Music</option>
                    	
                    	<option value="ProgramingContest">ProgramingContest</option>
                    	
                    	<option value="Debateing"> Debateing</option>
                    	
                    	<option value="Business Competion">Business Competion</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update category</button>
                    </div> 
                </div>
            </form>
        </div>
    </div>
@stop