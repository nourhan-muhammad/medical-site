@extends('layouts.main-layout')
@section('page-title')
    Contact |
@endsection
@section('page-content')
<section class="inner-hero">

    <div class="container text-center">

        <h1>Contact Us</h1>

        <p>
            Get In Touch With Our Team
        </p>

    </div>

</section>
<section>

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-6">

                <div class="card-box">

                    <h4 class="mb-4">
                        Send Message
                    </h4>

                    <form class="contact-form">

                        <input type="text"
                               class="form-control"
                               placeholder="Your Name">

                        <input type="email"
                               class="form-control"
                               placeholder="Your Email">

                        <input type="text"
                               class="form-control"
                               placeholder="WhatsApp Number">

                        <textarea class="form-control"
                                  placeholder="Your Message"></textarea>

                        <button class="btn-main border-0">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="card-box">

                    <h4 class="mb-4">
                        Company Information
                    </h4>

                    <p>

                        <i class="fa-solid fa-envelope"></i>

                        <a href="mailto:info@laboteka.com">
                            info@laboteka.com
                        </a>

                    </p>

                    <p>

                        <i class="fab fa-whatsapp"></i>

                        <a href="https://wa.me/201000000000"
                           target="_blank">

                            +20 100 000 0000

                        </a>

                    </p>

                    <p>

                        <i class="fab fa-facebook"></i>

                        <a href="https://facebook.com"
                           target="_blank">

                            Facebook Page

                        </a>

                    </p>

                    <p>

                        <i class="fab fa-instagram"></i>

                        <a href="https://instagram.com"
                           target="_blank">

                            Instagram Page

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection
