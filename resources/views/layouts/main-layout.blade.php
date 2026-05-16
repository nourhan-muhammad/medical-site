<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon"
          type="image/jpg"
          href="{{ asset('admin/img/logo.jpg') }}">

    <title>@yield('page-title') Laboteka</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<script src="{{asset('js/script.js')}}"></script>

<body>
@include('layouts.navbar')
@yield('page-content')
@include('layouts.footer')
</body>
</html>
