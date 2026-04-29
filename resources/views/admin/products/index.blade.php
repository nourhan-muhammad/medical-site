@extends('admin.layout')

@section('content')
    <h2>Products</h2>

    <a href="{{ route('products.create') }}">Add Product</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Batch</th>
            <th>Image</th>
            <th>Certificate</th>
            <th>Actions</th>
        </tr>

        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->batch->name }}</td>

                <td>
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" width="80">
                    @endif
                </td>

                <td>
                    @if($product->certificate)
                        <a href="{{ asset('storage/'.$product->certificate) }}" target="_blank">
                            View
                        </a>
                    @endif
                </td>

                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
