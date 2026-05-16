@extends('layouts.main-layout')

@section('page-title')
    About |
@endsection
@section('page-content')
<!-- Hero -->
<section class="inner-hero">

    <div class="container text-center">

        <h1>About Laboteka</h1>

        <p>
            Trusted Medical & IVF Healthcare Solutions
        </p>

    </div>

</section>

<!-- About -->
<section>

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img src="https://themewagon.github.io/novena/images/about/img-3.jpg"
                     class="img-fluid rounded-4">

            </div>

            <div class="col-lg-6">

                <h2 class="mb-4">
                    Who We Are
                </h2>

                <p>
                    Laboteka provides advanced medical and IVF solutions with professional healthcare technologies.
                </p>

                <p>
                    We support clinics, hospitals and laboratories with trusted healthcare products.
                </p>

                <a href="{{route('contact')}}" class="btn-main mt-3">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>
@endsection
