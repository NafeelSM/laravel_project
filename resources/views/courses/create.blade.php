@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">
        <form action="{{ url('course') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Syllebus</label></br>
            <input type="text" name="syllebus" id="syllebus" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop

