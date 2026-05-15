<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h1>Admin Panel</h1>

<nav>
    <a href="/admin/batches">Batches</a> |
    <a href="/admin/products">Products</a> |
    <a href="/home">Website</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">
            Logout
        </button>
    </form>
</nav>

<hr>

@yield('content')

</body>
</html>
