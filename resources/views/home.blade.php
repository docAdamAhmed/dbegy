@extends('master')


@section ('title')
Home
@endsection

@section ('slider')
<div class="home-slider">
    <!-- partial:index.partial.html -->
    <div class="hero-slider" data-carousel="">
        <div class="carousel-cell" style="background-image:url({{ asset('assets/images/home/home-1.jpg')}});">
            <div class="overlay"></div>
            {{-- <div class="container slider-caption">
                <h5 class="subtitle">Explore the World</h5>
                <h1>A more rewarding <br> way to travel</h1>
            </div> --}}
            <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="carousel-cell" style="background-image:url({{ asset('assets/images/home/home-2.jpg')}});">
            <div class="overlay"></div>
            {{-- <div class="container slider-caption">
                <h5 class="subtitle">Be an adventurer</h5>
                <h1>Collecting Memories <br> Every Time</h1>
            </div> --}}
            <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="carousel-cell" style="background-image:url({{ asset('assets/images/home/home-3.jpg')}});">
            <div class="overlay"></div>
            {{-- <div class="container slider-caption">
                <h5 class="subtitle">Commit to travel</h5>
                <h1>The Real Adventure <br>is out there</h1>
            </div> --}}
            <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="carousel-cell" style="background-image:url({{ asset('assets/images/home/home-4.jpg')}});">
            <div class="overlay"></div>
            {{-- <div class="container slider-caption">
                <h5 class="subtitle">Find your passion</h5>
                <h1>Escape life for <br> a little while</h1>
            </div> --}}
            <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- partial -->
</div>
@endsection

@section ('content')
{{-- <div class="testimonials-layer mt-5 mb-5">
    <div class="container">
        <div class="testimonial-carousel">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonial-card">                      
                        <h2>Who we are ?!</h2>
                        <div style="padding-right: 750px;padding-bottom: 15px;" class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="customer-opinion">We are a production house for artistic lighting and projection technologies
                            as well as production services for events. We transform buildings, spaces and
                            events with illuminated colors, static and motioned artworks.
                            As the sole provider of aesthetic bulb lighting and the exclusive agent of
                            Faniuolo lighting an Italian specialized company in celebratory arrangements
                            we are dedicated to offer an un-matched service.
                            At LUMEN8, we offer happiness through light, colors and experience.</p>
                            <div style="padding-left: 750px;padding-bottom: 15px;" class="quote-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>

                            <div class="mx-auto" style="width: 250px;">
                                <img style="width: 250px" src="{{ asset('assets/images/logos/logo.png')}}" alt="">
                              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <div class="text-center px-4 pt-5 my-5 border-bottom bg-dark">  --}}

<div class="text-center px-2 pt-2  border-bottom bg-dark">
    <h1 style="color: whitesmoke" class="display-4 fw-bold">Who we are ?!</h1>
    <div class="col-lg-6 mx-auto">
        
        <div style="padding-right: 750px;padding-bottom: 15px;" class="quote-icon">
            <i class="fas fa-quote-left"></i>
        </div>
        <p class="customer-opinion">We are a production house for artistic lighting and projection technologies
            as well as production services for events. We transform buildings, spaces and
            events with illuminated colors, static and motioned artworks.
            As the sole provider of aesthetic bulb lighting and the exclusive agent of
            Faniuolo lighting an Italian specialized company in celebratory arrangements
            we are dedicated to offer an un-matched service.
            At LUMEN8, we offer happiness through light, colors and experience.</p>
            <div style="padding-left: 550px;padding-bottom: 15px;" class="quote-icon">
                <i class="fas fa-quote-right"></i>
            </div>
    </div>
  </div>

  {{-- <div class="b-example-divider"> --}}
    <div class="divider">
     <h1 style="text-align: center"> WHAT WE SERVE</h1>
    </div>

<div class="my-5 bg-dark">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 style="color: whitesmoke" class="display-4 fw-bold lh-1">PROJECTION & PRODUCTION
        </h1>
        <p style="color: whitesmoke" class="lead">We offer 3D projection and video mapping. Techniques used to
            transform static objects into a video-projection on a surface of
            any shape and size.
            This could be on map structures, small indoor artifacts or
            temporary stages and a way of completely transforming a
            space to a dynamic, interactive and visually appealing.
            Almost every surface can be transformed into a realistic 2D and
            3D video display that can turn the audience’s reality into visions
            and images of infinite possibilities.
            We provide large scale items for celebrations like Christmas,
            New Years, Ramadan and other significant celebrations. We
            also bring you exhibition booths, retails kiosks, display stands
            and signages.
            Perfect for advertising, branding, entertainment, public art, and
            trade show presentations..</p>

      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="{{ asset('assets/images/home/sectionOne.jpg')}}" alt="" width="720">
      </div>
    </div>
  </div>
 
  
  <div class="my-5 bg-dark">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">

        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="{{ asset('assets/images/home/sectionTwo.jpg')}}" alt="" width="720">
        </div>

      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 style="color: whitesmoke" class="display-4 fw-bold lh-1">AESTHETIC LIGHTING
        </h1>
        <p style="color: whitesmoke" class="lead">We offer 3D projection and video mapping. Techniques used to
            transform static objects into a video-projection on a surface of
            any shape and size.
            This could be on map structures, small indoor artifacts or
            temporary stages and a way of completely transforming a
            space to a dynamic, interactive and visually appealing.
            Almost every surface can be transformed into a realistic 2D and
            3D video display that can turn the audience’s reality into visions
            and images of infinite possibilities.
            We provide large scale items for celebrations like Christmas,
            New Years, Ramadan and other significant celebrations. We
            also bring you exhibition booths, retails kiosks, display stands
            and signages.
            Perfect for advertising, branding, entertainment, public art, and
            trade show presentationsWe bring together shapes, colors and spirit to decorate different
            events and venues with to be part of your occasion all in light!
            We assemble different colored Italian bulbs to bring happiness
            to your space. Whether it's an event, a festivity or a celebration,
            we have the right light for you.
            We bring together bright colors and new shapes in unique
            combinations to add spirit and new feeling to your event or
            venue.
            Using our one of a kind Fanioulo light bulbs, we bring happiness
            to your space. Whether it's an event, a festivity or a celebration,
            we have the right light for you..</p>

      </div>
      
    </div>
  </div>
  


@endsection