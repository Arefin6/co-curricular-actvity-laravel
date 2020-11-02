@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Edit Event 
        </div>
        <div class="panel-body">
            <form action="{{ route('event.update',['id'=>$event->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="event_title">Event Title:</label>
                    <input type="text" name="event_title" class="form-control" value="{{$event->event_title}}">
                </div>
                
                <div class="form-group">
                    <label for="event_img">Event Img:</label>
                    <input type="file" name="event_img" class="form-control"/>
                   
                </div>
                
                <select name="eventCategory_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                <div class="form-group">
                    <label for="event_img">Event Content:</label>
                    <textarea name="event_content" id="" cols="30" rows="10"
                    class="form-control"	
                    >{{$event->event_content}}</textarea>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Event</button>
                    </div> 
                </div>
            </form>
        </div>
    </div>
@stop