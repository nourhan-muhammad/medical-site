@extends('admin.layout')

@section('content')
    <h2>Create Batch</h2>

    <form method="POST" action="{{ route('batches.store') }}">
        @csrf

        <input type="text" name="name" placeholder="Batch Name"><br><br>

        <input type="date" name="launch_date"><br><br>

        <textarea name="notes" placeholder="Notes"></textarea><br><br>

        <button type="submit">Save</button>
    </form>
@endsection
