<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/jpg" href="{{ asset('admin/img/logo.jpg') }}">

    <title>LaboTeka Admin Login</title>

    <!-- Fonts -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}"
          rel="stylesheet"
          type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
          rel="stylesheet">

    <!-- Template CSS -->
    <link href="{{ asset('admin/css/sb-admin-2.css') }}"
          rel="stylesheet">

</head>

<body class="bg-gradient-primary d-flex align-items-center justify-content-center vh-100">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-6 col-md-8">

            <div class="card o-hidden border-0 shadow-lg">

                <div class="card-body p-0">

                    <div class="p-5">

                        <div class="text-center mb-2">
{{--                            <h1 class="h3 text-gray-900 mb-3">--}}
{{--                                Welcome Back!--}}
{{--                            </h1>--}}



                                <img src="{{ asset('admin/img/logo.jpg') }}"
                                     width="70"
                                     class="rounded-circle mr-2" alt="LaboTeka logo">

                            <span class="h3 text-gray-900 mb-4">
                                Labo<b>Teka</b> Admin
                            </span>
                        </div>



                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST"
                              action="/login"
                              class="user">

                            @csrf

                            <div class="form-group">

                                <input type="email"
                                       name="email"
                                       class="form-control form-control-user"
                                       placeholder="Email Address"
                                       required>

                            </div>

                            <div class="form-group">

                                <input type="password"
                                       name="password"
                                       class="form-control form-control-user"
                                       placeholder="Password"
                                       required>

                            </div>

                            <button type="submit"
                                    class="btn btn-primary btn-user btn-block">

                                Login

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
<?php
