@extends('admin.layout')

@section('content')
    <h2>Edit Product</h2>

    <form method="POST" enctype="multipart/form-data" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <select name="batch_id">
            @foreach($batches as $batch)
                <option value="{{ $batch->id }}" {{ $batch->id == $product->batch_id ? 'selected' : '' }}>
                    {{ $batch->name }}
                </option>
            @endforeach
        </select><br><br>

        <input type="text" name="name" value="{{ $product->name }}"><br><br>

        <textarea name="description">{{ $product->description }}</textarea><br><br>

        <input type="file" name="image"><br><br>
        <input type="file" name="certificate"><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
