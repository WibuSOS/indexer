@extends('layouts.master')
@section('content')
<!--banner section-->

{{-- <section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-title">{{config('app.name', 'Indexer')}}</p>
                <p>place where you can find job easily</p> -->
                <a href="# "><img src="play.png" class="play-btn">Watch Tutorials</a>-->
            </div>
            <div class="col-md-6 text-center" class="img-fluid">
                <img alt="">
            </div>
        </div>
    </div>

    <img src="" class="bottom-img"> -->

</section> --}}

<!--Carousel Wrapper-->
<div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="2" class="active"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/black.jpg" alt="Los Angeles">
            <div class="carousel-caption">
                <!-- <h3>Slide 1</h3> -->
                <h1>Post and find part-time jobs</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/black.jpg" alt="Los Angeles">
            <div class="carousel-caption">
                <!-- <h3>Slide 2</h3> -->
                <h1>Simple to use UI</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/black.jpg" alt="Los Angeles">
            <div class="carousel-caption">
                <!-- <h3>Slide 3</h3> -->
                <h1>One-stop service for remote jobs</h1>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


<!--Services-->
<!-- <section id="services">
        <div class="container text-center">
            <h1 class="title">WHAT WE DO?</h1>
            <div class="row text-center">
                <div class="col-md-4 services">
                    <img src="circle.png" class="service-img">
                    <h4>GROWTH MARKETING</h4>
                    <p>Subscribe Easy Tutorials Youtube Channel to watch more videos on website</p>
                </div>
                <div class="col-md-4 services">
                    <img src="circle.png" class="service-img">
                    <h4>ONLINE BRANDING</h4>
                    <p>Subscribe Easy Tutorials Youtube Channel to watch more videos on website</p>
                </div>
                <div class="col-md-4 services">
                    <img src="circle.png" class="service-img">
                    <h4>ANIMATED ADS</h4>
                    <p>Subscribe Easy Tutorials Youtube Channel to watch more videos on website</p>
                </div>
            </div>
            <button type="button" class="btn btn-primary">All Services</button>
        </div>
    </section> -->

<!--About Us-->

<!-- <section id="about-us">
    <div class="container">
        <h1 class="title text-center">WHY CHOOSE US?</h1>
        <div class="row">
            <div class="col-md-6 about-us">
                <p class="about-title">Our features</p>
                <ul>
                    <li>Post and find part-time jobs</li>
                    <li>Simple to use UI</li>
                    <li>One-stop service for remote jobs</li>
                </ul>
            </div> -->
<!-- <div class="col-md-6">
                    <img src="homer.gif" class="img-fluid">
                </div> -->
<!-- </div>
    </div>
</section> -->

<!--Testimonials-->
<!-- <section id="testimonials">
        <div class="container">
            <h1 class="title text-center">WHAT CLIENTS SAY</h1>
            <div class="row offset-1">
                <div class="col-md-5 testimonials">
                    <p>Subscribe Easy Tutorials Youtube Channel to watch more videos on website</p>
                    <img src="homer.gif">
                    <p class="user-details"><b>Homer</b><br> Co-founder at Springfield</p>
                </div>
                <div class="col-md-5 testimonials">
                    <p>Subscribe Easy Tutorials Youtube Channel to watch more videos on website</p>
                    <img src="homer.gif">
                    <p class="user-details"><b>John</b><br> Co-founder at Springfield</p>
                </div>
            </div>
        </div>
    </section> -->

<!--Social Media-->
<section id="social-media">
    <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>

        <div class="social-icons">
            <a href="#"><img src="img/facebook.png"></a>
            <a href="#"><img src="img/instagram.png"></a>
            <a href="#"><img src="img/twitter.png"></a>
        </div>
    </div>
</section>

<!--footer-->

<section id="footer">
    <!--<img src="" class="footer-img">-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-box">
                <img src="img/indexer.png" alt="">
                <p>Indexer Tbk.</p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b>CONTACT US:</b></p>
                <p><i class="fa fa-map-marker" aria-hidden="true"> Jakarta, Indonesia</i></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i>+6281808880910</p>
                <p><i class="fa fa-envelope"></i>vincent@binus.ac.id</p>

            </div>
            <div class="col-md-4 footer-box">
                <p><b>SUBSCRIBE NEWSLETTER</b></p>
                <input type="email" name="form-control" placeholder="Your Email">
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
        </div>
        <hr>
        <p class="copyright">Website Crafted by Indexer team</p>
    </div>
</section>
@endsection 