@extends('admin.layout')

@section('content')
    <h2>Batches</h2>

    <a href="{{ route('batches.create') }}">Add Batch</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>

        @if($batches->count() > 0)
            @foreach($batches as $batch)
                <tr>
                    <td>{{ $batch?->name }}</td>
                    <td>{{ $batch?->launch_date }}</td>
                    <td>
                        <a href="{{ route('batches.edit', $batch?->id) }}">Edit</a>

                        <form action="{{ route('batches.destroy', $batch?->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection
