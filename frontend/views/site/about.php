<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Akame About Area Start -->
<section class="akame--about--area">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12 col-lg-6">
                <div class="section-heading text-right mb-80 pr-5 pt-3">
                    <p>New York • Since 2004</p>
                    <h2>About Our Stories</h2>
                    <span>History</span>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about--us--content mb-80">
                    <p>At Hairone Salon, we are lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/signature.png' ?>" alt="">
                    <h4>Lara Croft</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akame About Area End -->

<!-- Akame Video Area Start -->
<div class="akame--video--area">
    <div class="container">

        <!-- Video Content Area -->
        <div class="row">
            <div class="col-12">
                <div class="video-content-area mb-80">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/44.jpg' ?>" alt="">
                    <a href="https://www.youtube.com/watch?v=Ldd8yjjo6jA" class="video-play-btn wow bounceInDown" data-wow-delay="200ms"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <span>Case</span>
                    <h2 class="counter">457</h2>
                    <p>Projects Completed</p>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="400ms">
                    <span>Client</span>
                    <h2 class="counter">343</h2>
                    <p>Happy Customers</p>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="600ms">
                    <span>Award</span>
                    <h2 class="counter">379</h2>
                    <p>Award Winners</p>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="800ms">
                    <span>Style</span>
                    <h2 class="counter">97</h2>
                    <p>Different Hairstyles</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akame Video Area End -->

<!-- Testimonial Area Start -->
<section class="testimonial-area section-padding-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="testimonial-slides owl-carousel">

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <img src="<?= \yii\helpers\Url::to(['/']) . 'images/quote.png' ?>" alt="">
                        <p>BlueFresh is so simple, it's so easy to use. And from the customer's standpoint it's very intuitive, the platform is pretty much unlimited features!</p>
                        <div class="ratings-name d-flex align-items-center justify-content-center">
                            <div class="ratings mr-3">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h5>Jackson Nash</h5>
                        </div>
                    </div>

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <img src="<?= \yii\helpers\Url::to(['/']) . 'images/quote.png' ?>" alt="">
                        <p>BlueFresh is so simple, it's so easy to use. And from the customer's standpoint it's very intuitive, the platform is pretty much unlimited features!</p>
                        <div class="ratings-name d-flex align-items-center justify-content-center">
                            <div class="ratings mr-3">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h5>Jackson Nash</h5>
                        </div>
                    </div>

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <img src="<?= \yii\helpers\Url::to(['/']) . 'images/quote.png' ?>" alt="">
                        <p>BlueFresh is so simple, it's so easy to use. And from the customer's standpoint it's very intuitive, the platform is pretty much unlimited features!</p>
                        <div class="ratings-name d-flex align-items-center justify-content-center">
                            <div class="ratings mr-3">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h5>Jackson Nash</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->

<!-- Border -->
<div class="container">
    <div class="border-top"></div>
</div>


