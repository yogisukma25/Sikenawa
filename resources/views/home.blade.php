@extends('layouts.app')
    <!--====== HEADER PART START ======-->
@section('content')
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Get In Touch</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-map-marker"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Address</h6>
                            <p>123 Stree New York City , United States Of America 750</p>
                        </div>
                    </div> <!-- contact box -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Phone</h6>
                            <p>+931 2222 5555</p>
                            <p>+547 5554 6663</p>
                        </div>
                    </div> <!-- contact box -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="call-action-content text-center">
                        <h2 class="action-title">Have any project on mind?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nostrud.</p>
                        <ul>
                            <li><a class="main-btn custom" href="#">download cv</a></li>
                            <li><a class="main-btn custom-2" href="#">hire me</a></li>
                        </ul>
                    </div> <!-- call action content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->


    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Get In Touch</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form pt-30">
                        <form id="contact-form" action="assets/contact.php">
                            <div class="single-form">
                                <input type="text" name="name" placeholder="Name">
                            </div> <!-- single form -->
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email">
                            </div> <!-- single form -->
                            <div class="single-form">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> <!-- single form -->
                            <p class="form-message"></p>
                            <div class="single-form">
                                <button class="main-btn" type="submit">Send Message</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-map mt-60">
                        <div class="gmap_canvas">                            
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div> <!-- contact map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    
    <!--====== CONTACT PART ENDS ======-->

    @endsection