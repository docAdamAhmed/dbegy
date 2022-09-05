@extends('master')

@section('title')
    Projects Gallery
@endsection


@section('hero')
    <div class="pages-hero">
    <div id="particles-js" style="height: 350px"></div>
        <div class="container">
            <div class="pages-title">
                <h1>Projects Gallery</h1>
                <div class="page-nav">
                    <p><a href="#">Home</a> &nbsp; | &nbsp; <a href="#">Gallery</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
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
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-1.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-1.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-2.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-2.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-3.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-3.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-4.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-4.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-5.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-5.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-6.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-6.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-7.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-7.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-8.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-8.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-9.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-9.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-10.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-10.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-11.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-11.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-12.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-12.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-13.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-13.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-14.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-14.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-15.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-15.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-16.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-16.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-17.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-17.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-18.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-18.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-19.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-19.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-20.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-20.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-21.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-21.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-22.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-22.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-23.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-23.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-24.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-24.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-25.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-25.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-26.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-26.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-27.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-27.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-28.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-28.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-29.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-29.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-30.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-30.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-31.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-31.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-32.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-32.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-33.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-33.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-34.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-34.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-35.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-35.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-36.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-36.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-37.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-37.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-38.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-38.JPG') }}" alt="" />
                    </a>
                </div>

                <div class="grid-box diving">
                    <a class="image-popup-vertical-fit" href="{{ asset('assets/images/gallery/G-39.JPG') }}">
                        <div class="image-mask"></div>
                        <img src="{{ asset('assets/images/gallery/G-39.JPG') }}" alt="" />
                    </a>
                </div>

                {{-- ----------------------------------------VIDS------------------------------------------------------------ --}}



                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-1.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-2.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-3.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-4.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-5.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-6.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-7.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-8.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-9.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>

                <div class="grid-box atv">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe autoplay="false" class="embed-responsive-item"
                            src="{{ asset('assets/images/vids/vid-10.mp4') }}" style="border:1px solid black;"></iframe>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
