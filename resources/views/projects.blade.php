@extends('master')


@section('title')
    Projects
@endsection

@section('hero')
    <div class="pages-hero">
        <div id="particles-js" style="height: 350px"></div>
        <div class="container">
            <div class="pages-title">
                <h1>Projects</h1>
                <div class="page-nav">
                    <p><a href="/">Home</a> &nbsp; | &nbsp; <a href="#">Projects</a></p>
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
    <section style="padding-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="item">
                        <a href="/projects/gallery">
                            <figure class="tour-hover">
                                <img style="height: 337.23px" src="{{ asset('assets/images/gallery.jpg') }}"
                                    alt="" />
                                <figcaption>
                                    <div class="square">
                                        <div></div>
                                    </div>
                                    <h3>Projects <span> Gallery</span></h3>
                                    <p>Photo gallery for our latest and top projects</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="item">
                        <a href="/projects/led">
                            <figure class="tour-hover">
                                <img style="height: 337.23px" src="{{ asset('assets/images/led.jpg') }}" alt="" />
                                <figcaption>
                                    <div class="square">
                                        <div></div>
                                    </div>
                                    <h3>Led light <span> Projects</span></h3>
                                    <p>Some of our projects made with Led Lights</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                {{-- <div class="row"> --}}

                    <div class="col-6 mb-4">
                        <div class="item">
                            <a href="/projects/products">
                                <figure class="tour-hover">
                                    <img style="height: 337.23px" src="{{ asset('assets/images/product.jpg') }}"
                                        alt="" />
                                    <figcaption>
                                        <div class="square">
                                            <div></div>
                                        </div>
                                        <h3>Our <span> Products</span></h3>
                                        <p>Here's some of our products</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="item">
                            <a href="/projects/projector">
                                <figure class="tour-hover">
                                    <img style="height: 337.23px" src="{{ asset('assets/images/projector.jpg') }}"
                                        alt="" />
                                    <figcaption>
                                        <div class="square">
                                            <div></div>
                                        </div>
                                        <h3>Projector <span> Projects</span></h3>
                                        <p>Some of our projects made with Projector</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
        </div>
    </section>
        {{-- <section style="padding-top: 10px; padding-bottom: 10px">
    <div class="thumb-carousel play.owl.autoplay">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a href="/projects/gallery">
                    <figure class="tour-hover">
                        <img style="height: 337.23px" src="{{ asset('assets/images/gallery.jpg')}}" alt="" />
                        <figcaption>
                            <div class="square">
                                <div></div>
                            </div>
                            <h3>Projects <span> Gallery</span></h3>
                            <p>Photo gallery for our latest and top projects</p>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="item">
                <a href="/projects/led">
                    <figure class="tour-hover">
                        <img style="height: 337.23px" src="{{ asset('assets/images/led.jpg')}}" alt="" />
                        <figcaption>
                            <div class="square">
                                <div></div>
                            </div>
                            <h3>Led light <span> Projects</span></h3>
                            <p>Some of our projects made with Led Lights</p>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="item">
                <a href="/projects/projector">
                    <figure class="tour-hover">
                        <img style="height: 337.23px" src="{{ asset('assets/images/projector.jpg')}}" alt="" />
                        <figcaption>
                            <div class="square">
                                <div></div>
                            </div>
                            <h3>Our  <span> Products</span></h3>
                            <p>Here's some of our products</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="item">
                <a href="/projects/products">
                    <figure class="tour-hover">
                        <img style="height: 337.23px" src="{{ asset('assets/images/projector.jpg')}}" alt="" />
                        <figcaption>
                            <div class="square">
                                <div></div>
                            </div>
                            <h3>Projector  <span> Projects</span></h3>
                            <p>Some of our projects made with Projector</p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="owl-theme">
            <div class="owl-controls">
                <div class="custom-nav owl-nav">
                    <div class="owl-nav">
                        <div class="owl-prev">prev</div>
                        <div class="owl-next">next</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section> --}}
    @endsection

    @section('owlll')
        <script>
            $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    items: 4,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 1000,
                    autoplayHoverPause: true
                });
                $('.play').on('click', function() {
                    owl.trigger('play.owl.autoplay', [1000])
                })
                $('.stop').on('click', function() {
                    owl.trigger('stop.owl.autoplay')
                })
            })
        </script>
    @endsection
