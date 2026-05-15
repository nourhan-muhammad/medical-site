@extends('admin.admin-layout')

@section('main-content')

    <div id="content">

@include('admin.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <h1 class="h3 mb-0 text-gray-800">

                    Create Batch

                </h1>

                <a href="{{ route('batches.index') }}"
                   class="btn btn-secondary">

                    <i class="fas fa-arrow-left mr-1"></i>

                    Back

                </a>

            </div>

            <!-- Card -->
            <div class="card shadow mb-4">

                <div class="card-body">

                    <form method="POST"
                          action="{{ route('batches.store') }}">

                        @csrf

                        <!-- Batch Name -->
                        <div class="form-group">

                            <label>
                                Batch Name
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Enter batch name"
                                   required>

                        </div>

                        <!-- Launch Date -->
                        <div class="form-group">

                            <label>
                                Launch Date
                            </label>

                            <input type="date"
                                   name="launch_date"
                                   class="form-control"
                                   required>

                        </div>

                        <!-- Notes -->
                        <div class="form-group">

                            <label>
                                Notes
                            </label>

                            <textarea name="notes"
                                      rows="5"
                                      class="form-control"
                                      placeholder="Enter notes here..."></textarea>

                        </div>

                        <!-- Submit -->
                        <button type="submit"
                                class="btn btn-primary">

                            <i class="fas fa-save mr-1"></i>

                            Save Batch

                        </button>

                    </form>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>

@endsection
