@extends('layouts.main-layout')

@section('page-content')
<section class="hero-slider pt-0 pb-3">

    <div id="mainSlider"
         class="carousel slide carousel-fade"
         data-bs-ride="carousel">

        <div class="carousel-inner">

            <!-- Slide 1 -->

            <div class="carousel-item active hero-slide">

                <div class="container">

                    <div class="hero-content">

                        <p class="hero-sub">
                            TOTAL HEALTH CARE SOLUTION
                        </p>

                        <h1>
                            Your Most Trusted Health Partner
                        </h1>

                        <p>
                            Professional IVF & Medical Solutions for Clinics and Laboratories.
                        </p>

                        <a href="{{ route('products') }}" class="btn-main">
                            Explore Products
                        </a>

                    </div>

                </div>

            </div>

            <!-- Slide 2 -->

            <div class="carousel-item hero-slide slide-two">

                <div class="container">

                    <div class="hero-content">

                        <p class="hero-sub">
                            MODERN HEALTHCARE
                        </p>

                        <h1>
                            Advanced Medical Technologies
                        </h1>

                        <p>
                            Trusted healthcare products with modern technologies.
                        </p>

                        <a href="{{ route('contact') }}" class="btn-main">
                            Contact Us
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Slider Controls -->

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#mainSlider"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>

        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#mainSlider"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>

        </button>

    </div>

</section>

<!-- Features -->
<section>

    <div class="container">

        <div class="section-title">

            <h2>Why Choose Laboteka</h2>

            <p>
                Professional healthcare solutions with modern technologies.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card-box">

                    <i class="fa-solid fa-hospital fa-3x icon"></i>

                    <h4>Medical Equipment</h4>

                    <p>
                        High quality medical and IVF products for clinics and laboratories.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card-box">

                    <i class="fa-solid fa-heart-pulse fa-3x icon"></i>

                    <h4>Trusted Quality</h4>

                    <p>
                        Professional products with international healthcare standards.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card-box">

                    <i class="fa-solid fa-user-doctor fa-3x icon"></i>

                    <h4>Professional Support</h4>

                    <p>
                        Continuous support and healthcare consultation services.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection

