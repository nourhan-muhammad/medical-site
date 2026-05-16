<!-- Scroll To Top -->
<button id="scrollTopBtn">
    ↑
</button>
<body>

<!-- WhatsApp -->
<a href="https://wa.me/201000000000"
   class="whatsapp"
   target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Top Bar -->
<div class="top-bar">

    <div class="container d-flex justify-content-between align-items-center flex-wrap">

        <div>
            <i class="fa-solid fa-envelope"></i>
            info@laboteka.com
        </div>

        <div>
            <i class="fa-solid fa-phone"></i>
            +20 100 000 0000
        </div>

    </div>

</div>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light custom-navbar">

    <div class="container">

        <a class="navbar-brand"
           href="https://wa.me/201000000000"
           target="_blank">

            <img src="{{asset ('images/logo.png')}}" alt="Laboteka">

        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>

            </ul>

        </div>

    </div>

</nav>
