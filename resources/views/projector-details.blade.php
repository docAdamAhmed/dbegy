@extends('master')

@section('title')
Project Details
@endsection


@section('hero')
    <div class="pages-hero">
    <div id="particles-js" style="height: 350px"></div>
        <div class="container">
            <div class="pages-title">
                {{-- <h1>Project Details</h1> --}}
                <div style="padding-left: 25px" class="page-nav">
                    <p><a href="/">Home</a> &nbsp; | &nbsp; <a href="/projects/projector">Projector</a>| &nbsp; <a
                            href="#">Project Details</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="container mt-5 mb-5">
            <div class="row no-gutters">
                <div class="home-slider">
                    <div class="hero-slider" data-carousel="">
                @foreach ($Projector->photos as $photo)
                        <div class="carousel-cell" style="height: 100%;background-image:url({{ asset('assets/images/projector/' . $photo->filename) }});">
                            <div class="overlay"></div>
                            
                        </div>
                @endforeach        
                        
                    </div>
                </div>

            <div class="activity-description">
                <p>{{ $Projector->description }}</p>
            </div>
        </div>
    </section>

@endsection