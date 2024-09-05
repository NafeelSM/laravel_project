@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ url('batches/' . $batches->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")

            <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />

            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"><br>

            <label>Syllebus</label><br>
            <input type="text" name="syllebus" id="course_id" value="{{$batches->course_id}}" class="form-control"><br>

            <label>Duration</label><br>
            <input type="text" name="duration" id="start_date" value="{{$batches->start_date}}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>

    </div>
</div>
@stop
