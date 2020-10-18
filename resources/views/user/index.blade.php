@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
       <div class="panel-title text-center">
       		Users
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                       Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Approve
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>

                <tbody>
                    @if($users->count()>0)
                    @foreach($users as $user)
                        <tr>
                            <td>
                            {{$user->name}}
                            </td>
                            <td>
                             {{$user->email}}
                            </td>
                            <td>
                                
                           @if($user->approved)
                          	    
                           	   <a href="{{route('user.notapprove', ['id'=>$user->id])}}" class="btn btn-xs btn-danger">Reject</a> 
                           	    
                           	@else
                           	   <a href="{{route('user.approve', ['id'=>$user->id])}}" class="btn btn-xs btn-success">Approve</a>
                           	
                           	@endif 
                                
                            </td>
                            <td>
                                
                           	<a href="{{route('user.edit', ['id'=>$user->id])}}" class="btn btn-xs btn-info">Edit</a>
                                
                            </td>
                            <td>
                               <a href="{{route('user.delete', ['id'=>$user->id])}}" class="btn btn-xs btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                    @endforeach
                    @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Users yet</th>
                    	</tr>
                    	
                    @endif	
                </tbody>
            </table>
        </div>
    </div>
@stop