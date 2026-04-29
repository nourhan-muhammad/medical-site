@extends('admin.layout')

@section('content')
    <h2>Create Product</h2>

    <form method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
        @csrf

        <label>Batch:</label>
        <select name="batch_id">
            @foreach($batches as $batch)
                <option value="{{ $batch->id }}">{{ $batch->name }}</option>
            @endforeach
        </select><br><br>

        <input type="text" name="name" placeholder="Product Name"><br><br>

        <textarea name="description"></textarea><br><br>

        <label>Image:</label>
        <input type="file" name="image"><br><br>

        <label>Certificate (PDF):</label>
        <input type="file" name="certificate"><br><br>

        <button type="submit">Save</button>
    </form>
@endsection
