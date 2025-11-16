@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Electronics List</h2>
    <a href="{{ route('electronics.create') }}" class="btn btn-primary">Add New</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th width="180px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($electronics as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>

                <!-- VIEW -->
                <a href="{{ route('electronics.show', $item->id) }}" 
                   class="btn btn-sm btn-primary">
                    View
                </a>

                <!-- EDIT -->
                <a href="{{ route('electronics.edit', $item->id) }}" 
                   class="btn btn-sm btn-warning">
                    Edit
                </a>

                <!-- DELETE -->
                <form action="{{ route('electronics.destroy', $item->id) }}" 
                      method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" 
                            class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
