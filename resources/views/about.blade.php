@extends('master')


@section ('title')
About us
@endsection


@section('hero')

<div class="pages-hero">
    <div id="particles-js" style="height: 350px"></div>
    
    <div class="container">
        <div class="pages-title">
            
            <h1>About Us</h1>
            <div class="page-nav">
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

@section ('content')
<section>
    <div class="multicolor-layer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-layer">
                        <h2>Our Vision</h2>
                        <p><strong> We strive to make of our Company a leading and prominent principal reference for excellency in event management by providing high quality and reliable professional 
                            service that meets all customer requirements 
                            db group committed to building sustainable events and 
                            constantly works with its clients to achieve this goal by 
                             expertise as well as developing 
                            . Our vision relies on 
                            supporting customer on several levels so that each level 
                            suits the requirements and needs of customers..</strong>
                        </p>
                        {{-- <p>Your satisfaction with your experience that your recommendation. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                        </p> --}}
                        <br>
                        
                    </div>
                </div>
                <div class="col-lg-6 spacing-md">
                    <figure class="about-img-layer">
                       <img src="{{ asset('assets/images/contactOne.jpg')}}" alt=""> 
                    </figure>
                </div>
            </div>
        </div>


        <div class="container" style="margin-top: 70px">
            <div class="row">

                <div class="col-lg-6 spacing-md">
                    <figure class="about-img-layer">
                       <img src="{{ asset('assets/images/contactTwo.jpg')}}" alt=""> 
                    </figure>
                </div>

                <div class="col-lg-6">
                    <div class="about-layer">
                        <h2>Our Mission</h2>
                        <p><strong>Our company is considered one of the largest and most distinguished companies in the Middle East in festivals and celebrations using the latest technologies through the best creative experts that suit all your needs.</strong>
                        </p>
                        {{-- <p>Your satisfaction with your experience that your recommendation. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                        </p> --}}
                        <br>
                
                    </div>
                </div>
                
            </div>
        </div>

        
    </div>
</section>

@endsection