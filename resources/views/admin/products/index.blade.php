@extends('admin.admin-layout')

@section('main-content')

    <div id="content">
        @include('admin.topbar')

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-3">

                <h1 class="h3 mb-0 text-gray-800">
                    Products
                </h1>

                <a class="btn btn-primary"
                   href="{{ route('products.create') }}">

                    <i class="fa fa-plus-circle mr-1"></i>

                    Add Product

                </a>

            </div>

            <!-- Table -->
            <div class="card shadow mb-4">

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered"
                               id="dataTable"
                               width="100%"
                               cellspacing="0">

                            <thead>

                            <tr>

                                <th>Image</th>

                                <th>Product Name</th>

                                <th>Batch</th>

                                <th>Certificate</th>

                                <th>Actions</th>

                            </tr>

                            </thead>

                            <tbody>

                            @foreach($products as $product)

                                <tr>

                                    <td width="120">

                                        @if($product->image)

                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                 width="80"
                                                 class="img-thumbnail">

                                        @endif

                                    </td>

                                    <td>

                                        {{ $product->name }}

                                    </td>

                                    <td>

                                        {{ $product->batch->name }}

                                    </td>

                                    <td>

                                        @if($product->certificate)

                                            <a href="{{ asset('storage/' . $product->certificate) }}"
                                               target="_blank"
                                               class="btn btn-sm btn-info">

                                                <i class="fas fa-file-pdf mr-1"></i>

                                                View

                                            </a>

                                        @else

                                            <span class="text-muted">

                                            No Certificate

                                        </span>

                                        @endif

                                    </td>

                                    <td width="200">

                                        <a href="{{ route('products.edit', $product->id) }}"
                                           class="btn btn-sm btn-primary-blue">

                                            Edit
                                            <i class="fas fa-edit"></i>

                                        </a>

                                        <button type="button"
                                                class="btn btn-sm btn-primary"
                                                data-toggle="modal"
                                                data-target="#deleteModal{{ $product->id }}">

                                            Delete
                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </td>

                                </tr>

                                <!-- Delete Modal -->
                                <div class="modal fade"
                                     id="deleteModal{{ $product->id }}"
                                     tabindex="-1"
                                     role="dialog"
                                     aria-hidden="true">

                                    <div class="modal-dialog" role="document">

                                        <div class="modal-content">

                                            <div class="modal-header">

                                                <h5 class="modal-title">

                                                    Confirm Delete

                                                </h5>

                                                <button class="close"
                                                        type="button"
                                                        data-dismiss="modal">

                                                    <span aria-hidden="true">×</span>

                                                </button>

                                            </div>

                                            <div class="modal-body">

                                                Are you sure you want to delete
                                                <strong>{{ $product->name }}</strong> ?

                                            </div>

                                            <div class="modal-footer">

                                                <button class="btn btn-secondary"
                                                        type="button"
                                                        data-dismiss="modal">

                                                    Cancel

                                                </button>

                                                <form action="{{ route('products.destroy', $product->id) }}"
                                                      method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-primary">

                                                        Delete

                                                    </button>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
