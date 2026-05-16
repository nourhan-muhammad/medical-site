@extends('layouts.main-layout')
@section('page-title')
    Products |
@endsection
@section('page-content')
<section class="inner-hero">

    <div class="container text-center">

        <h1>Our Products</h1>

        <p>
            Professional IVF & Medical Products
        </p>

    </div>

</section>

<section>

    <div class="container">

        <div class="search-box mb-5">

            <input type="text"
                   id="searchInput"
                   class="form-control p-3"
                   placeholder="Search Product..."
                   onkeyup="searchProducts()">

        </div>

        <div class="row g-5">

            @if($products->count() > 0)

                @foreach($products as $product)
                    <!-- Product 1 -->

                    <div class="col-lg-6 product-item">

                        <div class="card-box">

                            <img src="{{ asset('storage/' . $product->image) }}"
                                 class="img-fluid">

                            <h3>
                                {{$product->name}}
                            </h3>

                            <h4>
                                {{$product->batch->name}}
                            </h4>

                            <p>
                                {{$product->description}}
                            </p>

                        </div>

                    </div>
                @endforeach

            @endif

        </div>

    </div>

</section>
@endsection
