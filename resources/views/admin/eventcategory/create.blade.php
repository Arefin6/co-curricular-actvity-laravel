@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Add New  Event Category
        </div>
        <div class="panel-body">
            <form action="{{ route('EventCategory.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="event_img">EventCategory Img:</label>
                    <input type="file" name="img" class="form-control">
                </div>
				
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Add Event Category </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop