@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Student Details</h1>

            <div class="card">
                <div class="card-body">
                    <p><strong>NIM:</strong> {{ $student->nim }}</p>
                    <p><strong>Name:</strong> {{ $student->name }}</p>
                    <p><strong>Email:</strong> {{ $student->email }}</p>
                    <p><strong>Phone:</strong> {{ $student->phone }}</p>
                    <p><strong>Address:</strong> {{ $student->address }}</p>
                    <p><strong>Major:</strong> {{ $student->major }}</p>
                    <p><strong>Created:</strong> {{ $student->created_at->format('d-m-Y H:i') }}</p>
                    <p><strong>Last Updated:</strong> {{ $student->updated_at->format('d-m-Y H:i') }}</p>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
