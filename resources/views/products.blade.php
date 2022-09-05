@extends('master')


@section ('title')
Products
@endsection


@section('hero')

<div class="pages-hero">
    <div id="particles-js" style="height: 350px"></div>
    <div class="container">
        <div class="pages-title">
            <h1>Our Products</h1>
            <div class="page-nav">
                <p><a href="/">Home</a> &nbsp; | &nbsp; <a href="#">Products</a></p>
            </div>
        </div>
    </div> 
</div>

@endsection

@section ('content')
<section>
    <div class="b-example-divider"></div>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">Product One</h1>
            <p class="lead">Description</p>
            <div>
              <h6>Product details</h6>
             <ul>
              <li>one</li>
              <li>two</li>
              <li>three</li>
              <li>four</li>
             </ul>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
              <img class="rounded-lg-3" src="{{ asset('assets/images/product.jpg')}}" alt="" width="720">
          </div>
        </div>
      </div>
  
    <div class="b-example-divider"></div>

    <div class="b-example-divider"></div>

    <div class="container my-5">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1">Product Two</h1>
          <p class="lead">Description</p>
          <div>
            <h6>Product details</h6>
           <ul>
            <li>one</li>
            <li>two</li>
            <li>three</li>
            <li>four</li>
           </ul>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="{{ asset('assets/images/product.jpg')}}" alt="" width="720">
        </div>
      </div>
    </div>
  
    <div class="b-example-divider"></div>
     
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact-title">
                    <h3>Get in Touch With Us</h3>
                    <p>Send us your details through the below form and one of our sales representative will contact you soon</p>
                </div>
                <br>
                <form id="contact-form" method="post" action="contact.php">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control custom-form" placeholder="*Name" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control custom-form" placeholder="*Email address" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="phone" class="form-control custom-form" placeholder="*Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control message-form custom-form" placeholder="*Your message" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 btn-send">
                                <p><input type="submit" class="btn btn-default" value="Send message"></p>
                            </div>
                            <div class="col-sm-12">
                                <p class="required">
                                    * These fields are required.
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- CONTACT FORM END -->
</section>
@endsection