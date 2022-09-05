@extends('master')

@section('title')
    Led Lights
@endsection


@section('hero')
    <div class="pages-hero">
    <div id="particles-js" style="height: 350px"></div>
        <div class="container">
            <div class="pages-title">
                <h1>Led Lights</h1>
                <div class="page-nav">
                    <p><a href="/projects">Projects</a> &nbsp; | &nbsp; <a href="#">Led Lights</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="container-fluid mt-5 mb-5">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($led as $leds)
                    <div class="col mb-4">
                        <div class="card">
        <img style="height: 400px" src="{{ asset('assets/images/cover/' . $leds->cover) }} "alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $leds->name }}</h5>
                                <a href="/led-details/{{ $leds->id }}" class="btn btn-dark">See Detials</a>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
