@extends('admin.admin-layout')
@section('main-content')
    <!-- Main Content -->
    <div id="content">

        @include('admin.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-3">

                <h1 class="h3 mb-0 text-gray-800">
                    Batches
                </h1>

                <a class="btn btn-primary"
                   href="{{ route('batches.create') }}">

                    <i class="fa fa-plus-circle mr-1"></i>

                    Add Batch

                </a>

            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Batch Name</th>

                                <th>Launch Date</th>

                                <th>Products Count</th>

                                <th>Actions</th>

                            </tr>

                            </thead>
                            <tbody>

                            @if($batches->count() > 0)

                                @foreach($batches as $batch)

                                    <tr>

                                        <td>{{ $batch->name }}</td>

                                        <td>{{ $batch->launch_date }}</td>

                                        <td>

                                            {{ $batch->products->count() }}

                                        </td>

                                        <td width="180">

                                            <a href="{{ route('batches.edit', $batch->id) }}"
                                               class="btn btn-sm btn-primary-blue">

                                                <span class="d-none d-md-inline">Edit</span>
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('batches.destroy', $batch->id) }}"
                                                  method="POST"
                                                  style="display:inline;">

                                                @csrf
                                                @method('DELETE')

                                                <button type="button"
                                                        class="btn btn-sm btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#deleteModal{{ $batch->id }}">

                                                    <span class="d-none d-md-inline">Delete</span>
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </form>
                                            <!-- Delete Modal -->
                                            <div class="modal fade"
                                                 id="deleteModal{{ $batch->id }}"
                                                 tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="deleteModalLabel{{ $batch->id }}"
                                                 aria-hidden="true">

                                                <div class="modal-dialog" role="document">

                                                    <div class="modal-content">

                                                        <div class="modal-header">

                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $batch->id }}">

                                                                Confirm Delete

                                                            </h5>

                                                            <button class="close"
                                                                    type="button"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">

                                                                <span aria-hidden="true">×</span>

                                                            </button>

                                                        </div>

                                                        <div class="modal-body">

                                                            Are you sure you want to delete
                                                            <strong>{{ $batch->name }}</strong> ?

                                                        </div>

                                                        <div class="modal-footer">

                                                            <button class="btn btn-secondary"
                                                                    type="button"
                                                                    data-dismiss="modal">

                                                                Cancel

                                                            </button>

                                                            <form action="{{ route('batches.destroy', $batch->id) }}"
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
                                        </td>

                                    </tr>

                                @endforeach

                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End of Main Content -->
@endsection
