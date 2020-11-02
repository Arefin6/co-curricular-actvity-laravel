@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
       <div class="panel-title text-center">
       		Students
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                   
                   <th>
                     Img
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        delete
                    </th>
                </thead>

                <tbody>
                    @if($eventCategory->count()>0)
                    @foreach($eventCategory as $category)
                        <tr>
                            
                            <td>
                             {{$category->name}}
                            </td>
                            <td>
                            <img src="{{ asset('' . $category->img) }}"width="120px"height="80px" style="border-radius: 50%;"/>
                            </td>
                           
                            <td>
                            	<a href="{{route('EventCategory.edit', ['id'=>$category->id])}}" class="btn btn-xs btn-info">Edit</a>
                            	
                            </td>
                            <td>
                              <a href="{{route('EventCategory.delete', ['id'=>$category->id])}}" class="btn btn-xs btn-danger">Delete</a> 
                                
                            </td>
                        </tr>
                    @endforeach
                    @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Event Category yet</th>
                    	</tr>
                    	
                    @endif	
                </tbody>
            </table>
        </div>
    </div>
@stop