@extends('master')

@section('title')
    Projector
@endsection


@section('hero')
    <div class="pages-hero">
    <div id="particles-js" style="height: 350px"></div>
        <div class="container">
            <div class="pages-title">
                <h1>Projector</h1>
                <div class="page-nav">
                    <p><a href="/projects">Projects</a> &nbsp; | &nbsp; <a href="#">Projector</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="container-fluid mt-5 mb-5">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($projector as $projectors)
                    <div class="col mb-4">
                        <div class="card">
        <img style="height: 400px" src="{{ asset('assets/images/cover/' . $projectors->cover) }} "alt="...">
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
@endsection
