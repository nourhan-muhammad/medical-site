@extends('admin.layout')

@section('content')
    <h2>Edit Batch</h2>

    <form method="POST" action="{{ route('batches.update', $batch->id) }}">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $batch->name }}"><br><br>

        <input type="date" name="launch_date" value="{{ $batch->launch_date }}"><br><br>

        <textarea name="notes">{{ $batch->notes }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
