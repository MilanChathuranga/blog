@extends('layouts.app')

@section('title', 'page Title')

@section('page_header')
    @parent
    <div class="page-header">
        <div class="about-banner-shape-left wow animate__animated animate__fadeInLeft">
            <img src="images/shapes/03_shape-01.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="habu">
        </div>
        <div class="about-banner-shape-right wow animate__animated animate__fadeInRight animate__delay-1s">
            <img src="images/shapes/03_shape-02.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="habu">
        </div>
        <div class="container">
            <div class="page-header-text wow animate__animated animate__fadeInDown">
                <h1 class="page-title">Contact Us</h1>
                <span>Home</span>
                <span class="span-divider font-weight-bold">|</span>
                <span class="font-weight-bold">Contact Us</span>
                <div class="page-banner-shape-title">
                    <img src="images/shapes/03_shape-03.png"
                         class="wow animate__animated animate__fadeInUp animate__delay-1s" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- =========================== 4. Contact Section =========================================== -->

    <section class="contact-area">
        <div class="container">
            <div class="section-heading text-center mx-auto wow animate__animated animate__slideInUp">
                <h2>Feel Free To Knock Us</h2>
                <p>We have people of multiple kind in the house. Together we canprovide high quality work to satisfy
                    you.</p>
            </div>
            <!-- Location -->
            <div class="location-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.9970179245997!2d90.37933665546187!3d23.764471837688824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c755f321f80b%3A0x5b87cdb2ee46b9a1!2sPresidential%20Plaza%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1605596229502!5m2!1sen!2sbd"
                    height="601" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <!-- Address -->
            <div class="address-container wow animate__animated animate__fadeIn">
                <div class="row">
                    <div class="col-sm-4 col-6 d-flex align-items-center">
                        <div class="address-box mx-auto">
                            <img class="mx-auto" src="images/svgs/map.png" alt="map">
                            <p>22 B, Bakerstreet,<br> London, UK</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 d-flex align-items-center">
                        <div class="address-box mx-auto">
                            <img class="mx-auto" src="images/svgs/chatting.png" alt="map">
                            <a href="tel:+44236523658">+44 2365 23658</a>
                            <a href="tel:+1232533654">+1 2325 33654</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 mx-auto d-flex align-items-center">
                        <div class="address-box mx-auto">
                            <img class="mx-auto" src="images/svgs/message.png" alt="map">
                            <a href="mailto:asalam.jes@gmail.com">asalam.jes@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="contact-form-area wow animate__animated animate__fadeIn">
                <h2>Leave a message</h2>
                <div class="row">
                    <form action="#">
                        <div class="col-md-4">
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="col-md-4">
                            <input type="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea placeholder="Your Message"></textarea>
                            <input class="large-blue-button" type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== 5. Custom Project Section =========================================== -->

    <div class="custom-projects">
        <div class="container d-lg-flex align-items-center">
            <div class="section-heading">
                <h1>Custom Projects</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="custom-project-button ml-auto">
                <button>Get A Quote</button>
            </div>
        </div>
        <div class="custom-projects-shape-2">
            <img src="images/shapes/shape-02.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-1">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="Habu">
        </div>
        <div class="custom-projects-circle-2">
            <img src="images/shapes/shape-circle.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-3">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="Habu">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>
@endsection
