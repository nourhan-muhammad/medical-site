@extends('admin.admin-layout')

@section('main-content')

    <div id="content">

        @include('admin.topbar')

        <!-- Page Content -->
        <div class="container-fluid">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <h1 class="h3 text-gray-800">

                    Edit Product

                </h1>

                <a href="{{ route('products.index') }}"
                   class="btn btn-secondary">

                    <i class="fas fa-arrow-left mr-1"></i>

                    Back

                </a>

            </div>

            <!-- Card -->
            <div class="card shadow mb-4">

                <div class="card-body">

                    <form method="POST"
                          enctype="multipart/form-data"
                          action="{{ route('products.update', $product->id) }}">

                        @csrf
                        @method('PUT')

                        <!-- Batch -->
                        <div class="form-group">

                            <label>Batch</label>

                            <select name="batch_id"
                                    class="form-control"
                                    required>

                                @foreach($batches as $batch)

                                    <option value="{{ $batch->id }}"
                                        {{ $batch->id == $product->batch_id ? 'selected' : '' }}>

                                        {{ $batch->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <!-- Name -->
                        <div class="form-group">

                            <label>Product Name</label>

                            <input type="text"
                                   name="name"
                                   value="{{ $product->name }}"
                                   class="form-control"
                                   required>

                        </div>

                        <!-- Description -->
                        <div class="form-group">

                            <label>Description</label>

                            <textarea name="description"
                                      rows="4"
                                      class="form-control">{{ $product->description }}</textarea>

                        </div>

                        <!-- Current Image -->
                        @if($product->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/'.$product->image) }}"
                                     width="100"
                                     class="rounded">
                            </div>
                        @endif

                        <!-- Image -->
                        <div class="form-group">

                            <label>Change Image</label>

                            <input type="file"
                                   name="image"
                                   class="form-control-file">

                        </div>

                        <!-- Certificate -->
                        <div class="form-group">

                            <label>Change Certificate (PDF)</label>

                            <input type="file"
                                   name="certificate"
                                   class="form-control-file">

                        </div>

                        <!-- Submit -->
                        <button type="submit"
                                class="btn btn-primary">

                            <i class="fas fa-save mr-1"></i>

                            Update Product

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
