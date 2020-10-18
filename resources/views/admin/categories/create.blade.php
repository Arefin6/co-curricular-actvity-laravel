@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Create a new category
        </div>
        <div class="panel-body">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    
                    <select name="name" class="form-control" id="">
                    
                    	<option value="Singer">Singer</option>
                    	
                    	<option value="Dancer">Dancer</option>
                    	<option value="Writer">Writter</option>
                    	<option value="Stand Up Comedian">Stand Up Comedian</option>
                    	<option value="Recur">Recur</option>
                    	
                    	<option value="Programmer">Programmer</option>
                    	<option value="Cyclist">Cyclist</option>
                    	
                    	<option value="Debater"> Debater</option>	
                    	<option value="Footboller">Footboller</option>
                    	<option value="Cricekter">Cricekter</option>
                    	<option value="Carram player">Carram player</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store category</button>
                    </div> 
                </div>
            </form>
        </div>
    </div>
@stop