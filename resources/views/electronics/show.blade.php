@extends('layout')

@section('content')
<h2>Electronic Detail</h2>
<a href="{{ route('electronics.index') }}" class="btn btn-secondary btn-sm mb-3">Back</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <td>{{ $electronic->id }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ $electronic->name }}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{ $electronic->description }}</td>
    </tr>
</table>
@endsection
