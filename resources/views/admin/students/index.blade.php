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
                        Approve
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        delete
                    </th>
                </thead>

                <tbody>
                    @if($students->count()>0)
                    @foreach($students as $student)
                        <tr>
                            <td>
                           <img src="{{ asset('' . $student->img) }}"   width="70px"height="50px" style="border-radius: 50%;"/>
                            </td>
                            <td>
                             {{$student->name}}
                            </td>
                            <td>
                              @if($student->approved)
                          	    
                           	   <a href="{{route('user.notapprove', ['id'=>$student->id])}}" class="btn btn-xs btn-danger">Reject</a> 
                           	    
                           	@else
                           	   <a href="{{route('user.approve', ['id'=>$student->id])}}" class="btn btn-xs btn-success">Approve</a>
                           	
                           	@endif    
                           	
                                
                            </td>
                            <td>
                            	<a href="{{route('students.edit', ['id'=>$student->id])}}" class="btn btn-xs btn-info">Edit</a>
                            	
                            </td>
                            <td>
                              <a href="{{route('students.delete', ['id'=>$student->id])}}" class="btn btn-xs btn-danger">Delete</a> 
                                
                            </td>
                        </tr>
                    @endforeach
                    @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Students</th>
                    	</tr>
                    	
                    @endif	
                </tbody>
            </table>
        </div>
    </div>
@stop