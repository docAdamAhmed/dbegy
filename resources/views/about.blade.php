@extends('master')


@section('title')
    About us
@endsection


@section('hero')
    <div class="pages-hero">
        <div id="particles-js" style="height: 350px"></div>

        <div class="container">
            <div class="pages-title">

                {{-- <h1>About Us</h1> --}}
                <div style="padding-left: 25px" class="page-nav">
                    <p><a href="/">Home</a> &nbsp; | &nbsp; <a href="#">About Us</a></p>
                </div>
            </div>
        </div>
        <div class="social-media">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="multicolor-layer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-layer">
                            <h2>Our Vision</h2>
                            <p><strong> At db Group we strive to deliver extraordinary experiences through stunning and
                                    innovative visual technologies in Egypt & Middle East.
                                    Dp Group are on track to change the way brands and businesses out there talk to
                                    customers once and forever.</strong>
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-6 spacing-md">
                        <figure class="about-img-layer">
                            <img style="border: 2px solid rgb(60, 60, 61);
                       padding: 2px;
                       border-radius: 50px 20px;"
                                src="{{ asset('assets/images/new/vision.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>


            <div class="container" style="margin-top: 70px">
                <div class="row">

                    <div class="col-lg-6 spacing-md">
                        <figure class="about-img-layer">
                            <img style=" border: 2px solid rgb(60, 60, 61);
                       padding: 2px;
                       border-radius: 50px 20px;"
                                src="{{ asset('assets/images/new/mission.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-layer">
                            <h2>Our Mission</h2>
                            <p><strong>We are a professional that provide continuously new and impactful products to the
                                    Middle East. Our focus remains on providing new and compelling products that push the
                                    boundaries of visual 3D projection mapping technology, Event Projection and Creative
                                    Lighting.</strong>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 70px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-layer">
                            <h2>Our core values</h2>
                            <p><strong>Innovation We bring continuously new and impactful products Customer experience We provide rich & compelling customer experience. Outstanding service We provide best-in-class service to our clients. Reliability Transparent relationships with Partners, clients & colleagues. Ongoing development We constantly release updates & new features. Manufacturing excellence We utilize the highest quality components.</strong>
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-6 spacing-md">
                        <figure class="about-img-layer">
                            <img style="border: 2px solid rgb(60, 60, 61);
                       padding: 2px;
                       border-radius: 50px 20px;"
                                src="{{ asset('assets/images/new/values.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="b-example-divider"></div>

    <div class="px- py- my- text-center">
        <h1 class="display-5 fw-bold">OUR CLIENTS</h1>
    </div>
    <div class="b-example-divider"></div>
    <img src="{{ asset('assets/images/new/partners-01.jpg') }}" alt="" srcset="">
@endsection
