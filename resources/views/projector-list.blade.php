@extends('master')

@section('title')
    Projector
@endsection


@section('hero')
    <div class="pages-hero">
        <div id="particles-js" style="height: 350px"></div>
        <div class="container">
            <div class="pages-title">
                {{-- <h1>Projector</h1> --}}
                <div style="padding-left: 25px" class="page-nav">
                    <p><a href="/projects">Projects</a> &nbsp; | &nbsp; <a href="#">Projector</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section>

        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Why projection mapping</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Projection mapping is a visual feast, a new kind of fireworks, an extraordinary form of
                    entertainment
                    with an enormous wow factor. It gives you the unique opportunity to attract and immerse large
                    S
                    crowds with creating a sound and light show and inspiring spectacles - even from a distance (which is
                    not unimportant in times of social distancing and gathering restrictions).</p>
            </div>
        </div>
    </section>

    <div class="b-example-divider"></div>

    <section>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Projects</h1>
        </div>

        <div class="container-fluid mt-5 mb-5">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($projector as $projectors)
                    <div class="col mb-4">
                        <div class="card">
                            <img style="height: 400px"
                                src="{{ asset('assets/images/cover/' . $projectors->cover) }} "alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $projectors->name }}</h5>
                                <a href="/projector-details/{{ $projectors->id }}" class="btn btn-dark">See Detials</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <div class="b-example-divider"></div>

    <div class="px- py- my- text-center">
        <h1 class="display-5 fw-bold">Gallery</h1>
    </div>

    <section>
        <!-- PROJECT GRID START -->
        <div class="container-fluid mt-5 mb-5">
            <div class="filter-container">
                <ul class="filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".atv">Videos</li>
                    <li data-filter=".diving">Photos</li>
                </ul>
            </div>
            <div class="grid grid-four-col" id="kehl-grid">
                <div class="grid-sizer"></div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/new/pro(1).jpg') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/new/pro(1).jpg') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/new/pro(2).jpg') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/new/pro(2).jpg') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/new/pro(3).jpg') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/new/pro(3).jpg') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/new/pro(4).jpg') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/new/pro(4).jpg') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/new/pro(5).jpg') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/new/pro(5).jpg') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/new/pro(6).jpg') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/new/pro(6).jpg') }}" alt="" />
                    </a>
                </div>

                {{-- ----------------------------------------VIDS------------------------------------------------------------ --}}

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video class="img-fluid" controls muted>
                            <source src="{{ asset('assets/images/vids/pro_vid_1.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                </div>


                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video class="img-fluid" controls muted>
                            <source src="{{ asset('assets/images/vids/pro_vid_2.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                </div>


                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video class="img-fluid" controls muted>
                            <source src="{{ asset('assets/images/vids/pro_vid_3.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video class="img-fluid" controls muted>
                            <source src="{{ asset('assets/images/vids/pro_vid_4.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video class="img-fluid" controls muted>
                            <source src="{{ asset('assets/images/vids/pro_vid_5.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
