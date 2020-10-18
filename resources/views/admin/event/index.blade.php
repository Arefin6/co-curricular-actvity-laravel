@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
       <div class="panel-title text-center">
       		Events
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                       Img
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>

                <tbody>
                    @if($events->count()>0)
                    @foreach($events as $event)
                        <tr>
                            <td>
                           <img src="{{ asset('/'. $event->event_img) }}"   width="70px"height="50px" style="border-radius: 50%;"/>
                            </td>
                            <td>
                             {{$event->event_title}}
                            </td>
                            <td>
                                
                           	<a href="{{route('event.edit', ['id'=>$event->id])}}" class="btn btn-xs btn-info">Edit</a>
                                
                            </td>
                            <td>
                              <a href="{{route('event.delete', ['id'=>$event->id])}}" class="btn btn-xs btn-danger">Delete</a> 
                                
                            </td>
                        </tr>
                    @endforeach
                    @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Events yet</th>
                    	</tr>
                    	
                    @endif	
                </tbody>
            </table>
        </div>
    </div>
@stop