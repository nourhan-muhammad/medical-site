<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon"
          type="image/jpg"
          href="{{ asset('admin/img/logo.jpg') }}">

    <title>LaboTeka Admin</title>

    <!-- Fonts -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.css') }}"
          rel="stylesheet"
          type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('admin/css/sb-admin-2.css') }}"
          rel="stylesheet">

    <!-- DataTables -->
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.css') }}"
          rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar">

        <!-- Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="{{ route('batches.index') }}">

            <div class="sidebar-brand-icon">

                <img src="{{ asset('admin/img/logo.jpg') }}"
                     width="40"
                     class="rounded-circle">

            </div>

            <div class="sidebar-brand-text mx-3">

                <span class="laboteka-red">Labo<b>Teka</b></span> Admin

            </div>

        </a>

        <hr class="sidebar-divider">

        <!-- Batches -->
        <li class="nav-item {{ request()->routeIs('batches.*') ? 'active' : '' }}">

            <a class="nav-link"
               href="{{ route('batches.index') }}">

                <i class="fas fa-layer-group"></i>

                <span>Batches</span>

            </a>

        </li>

        <!-- Products -->
        <li class="nav-item {{ request()->routeIs('products.*') ? 'active' : '' }}">

            <a class="nav-link"
               href="{{ route('products.index') }}">

                <i class="fas fa-box"></i>

                <span>Products</span>

            </a>

        </li>

        <hr class="sidebar-divider">

        <!-- Website -->
        <li class="nav-item">

            <a class="nav-link"
               href="{{ url('/') }}"
               target="_blank">

                <i class="fas fa-globe"></i>

                <span>Website</span>

            </a>

        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggle -->
        <div class="text-center d-none d-md-inline">

            <button class="rounded-circle border-0"
                    id="sidebarToggle">

            </button>

        </div>

    </ul>
    <!-- End Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper"
         class="d-flex flex-column">

        @yield('main-content')

        <!-- Footer -->
        <footer class="sticky-footer bg-white">

            <div class="container my-auto">

                <div class="copyright text-center my-auto">

                    <span>
                        Copyright &copy; Labo<b>Teka</b> 2026
                    </span>

                </div>

            </div>

        </footer>
        <!-- End Footer -->

    </div>
    <!-- End Content Wrapper -->

</div>
<!-- End Wrapper -->

<!-- Scroll Top -->
<a class="scroll-to-top rounded"
   href="#page-top">

    <i class="fas fa-angle-up"></i>

</a>

<!-- Logout Modal -->
<div class="modal fade"
     id="logoutModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog"
         role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">

                    Ready to Leave?

                </h5>

                <button class="close"
                        type="button"
                        data-dismiss="modal">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

            <div class="modal-body">

                Select "Logout" below if you are ready to end your current session.

            </div>

            <div class="modal-footer">

                <button class="btn btn-secondary"
                        type="button"
                        data-dismiss="modal">

                    Cancel

                </button>

                <form method="POST"
                      action="{{ route('logout') }}">

                    @csrf

                    <button class="btn btn-primary"
                            type="submit">

                        <i class="fas fa-sign-out-alt mr-1"></i>

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('admin/vendor/jquery/jquery.js') }}"></script>

<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.js') }}"></script>

<script src="{{ asset('admin/js/sb-admin-2.js') }}"></script>

<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.js') }}"></script>

<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

</body>

</html>
