@extends('admin.admin-layout')

@section('main-content')

    <div id="content">
        @include('admin.topbar')

        <!-- Page Content -->
        <div class="container-fluid">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <h1 class="h3 text-gray-800">

                    Create Product

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
                          action="{{ route('products.store') }}">

                        @csrf

                        <!-- Batch -->
                        <div class="form-group">

                            <label>Batch</label>

                            <select name="batch_id"
                                    class="form-control"
                                    required>

                                <option value="">-- Select Batch --</option>

                                @foreach($batches as $batch)

                                    <option value="{{ $batch->id }}">

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
                                   class="form-control"
                                   placeholder="Enter product name"
                                   required>

                        </div>

                        <!-- Description -->
                        <div class="form-group">

                            <label>Description</label>

                            <textarea name="description"
                                      rows="4"
                                      class="form-control"
                                      placeholder="Enter product description"></textarea>

                        </div>

                        <!-- Image -->
                        <div class="form-group">

                            <label>Image</label>

                            <input type="file"
                                   name="image"
                                   class="form-control-file">

                        </div>

                        <!-- Certificate -->
                        <div class="form-group">

                            <label>Certificate (PDF)</label>

                            <input type="file"
                                   name="certificate"
                                   class="form-control-file">

                        </div>

                        <!-- Submit -->
                        <button type="submit"
                                class="btn btn-primary">

                            <i class="fas fa-save mr-1"></i>

                            Save Product

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
