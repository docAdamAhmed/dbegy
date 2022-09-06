@extends('master')


@section ('title')
Contact us
@endsection


@section('hero')

<div class="pages-hero">
    <div id="particles-js" style="height: 350px"></div>
    <div class="container">
        <div class="pages-title">
            <h1>Contact Us</h1>
            <div class="page-nav">
                <p><a href="/">Home</a> &nbsp; | &nbsp; <a href="#">Contact Us</a></p>
            </div>
        </div>
    </div> 
</div>

@endsection

@section ('content')
<section>
    <!-- CONTACT FORM START -->
    <div class="contact-banner mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="cb-circle">
                            <figure class="cb-icon">
                                <img src="images/icons/placeholder.png" alt="">
                            </figure>
                        </div>
                        <p>Cairo - Egypt</p>
                    </div>
                </div>
                <div class="col-lg-4 spacing-m-center">
                    <div class="contact-box">
                        <div class="cb-circle">
                            <figure class="cb-icon">
                                <img src="images/icons/telephone.png" alt="">
                            </figure>
                        </div>
                        <p><a href="tel:718-825-3320"> 718-825-3320</a></p>
                        <p><a href="tel:212-632-4120"> 212-632-4120</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="cb-circle">
                            <figure class="cb-icon">
                                <img src="images/icons/placeholder.png" alt="">
                            </figure>
                        </div>
                        <p><a href="mailto:info@travi.com">info@travi.com</a></p>
                        <p><a href="mailto:sales@travi.com">sales@travi.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact-title">
                    <h3>Get in Touch With Us</h3>
                    <p>World’s leading non-asset- based supply chain management companies, we design and implement
                        industry-leading. We specialise in intelligent & effective search and believes business.</p>
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