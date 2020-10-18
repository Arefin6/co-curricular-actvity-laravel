@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Add a new Event 
        </div>
        <div class="panel-body">
            <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="event_title">Event Title:</label>
                    <input type="text" name="event_title" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="event_img">Event Img:</label>
                    <input type="file" name="event_img" class="form-control">
                </div>
                
                
                <div class="form-group">
                    <label for="event_img">Event Content:</label>
                    <textarea name="event_content" id="" cols="30" rows="10"
                    class="form-control"	
                    ></textarea>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Add Event</button>
                    </div> 
                </div>
            </form>
        </div>
    </div>
@stop