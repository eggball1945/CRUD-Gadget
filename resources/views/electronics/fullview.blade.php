@extends('layout')

@section('content')

<style>
    .table-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: 0.2s ease-in-out;
    }
    .table-card:hover {
        box-shadow: 0 6px 20px rgba(0,0,0,0.10);
    }
    .table thead th {
        background: #6c757d;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .5px;
    }
    .table-hover tbody tr:hover {
        background-color: #f5f7ff;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Full View</h2>

    <a href="{{ route('electronics.index') }}" class="btn btn-dark">
        ← Back to List
    </a>
</div>

<div class="table-card">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th width="70">No</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>
                @foreach($electronics as $index => $item)
                <tr>
                    <td class="fw-semibold">{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
