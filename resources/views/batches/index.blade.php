@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">
        <h2>Course Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/course/create') }}" class="btn btn-success btn-sm" title="Add New Course">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Syllebus</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->syllebus }}</td>
                        <td>{{ $item->duration }}</td>

                        <td>
                            <a href="{{ url('/course/' . $item->id) }}" title="View Course"><button class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true"></i> View </button></a>
                            <a href="{{ url('/course/' . $item->id . '/edit') }}" title="Edit Course"><button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit </button></a>
                            <form method="POST" action="{{ url('/course/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course" onclick="return confirm('Confirm delete?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
