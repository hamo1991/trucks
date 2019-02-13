<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Contact Information Area Start -->
<section class="contact-information-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <!-- Single Contact Information -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-contact-information mb-80">
                    <i class="icon_phone"></i>
                    <h4>Phone</h4>
                    <p>+01-3-8888-6868</p>
                </div>
            </div>

            <!-- Single Contact Information -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-contact-information mb-80">
                    <i class="icon_pin"></i>
                    <h4>Address</h4>
                    <p>Iris Watson, 283 Fusce Rd,NY</p>
                </div>
            </div>

            <!-- Single Contact Information -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-contact-information mb-80">
                    <i class="icon_clock"></i>
                    <h4>Open time</h4>
                    <p>10:00 am to 23:00 pm</p>
                </div>
            </div>

            <!-- Single Contact Information -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-contact-information mb-80">
                    <i class="icon_mail"></i>
                    <h4>Email</h4>
                    <p>info.colorlib@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Information Area End -->

<!-- Google Maps Start -->
<div class="akame-google-maps-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48396.58860923626!2d-74.02909054214638!3d40.70069315381758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547805689070" allowfullscreen></iframe>
</div>
<!-- Google Maps End -->

<!-- Contact Area Start -->
<section class="akame-contact-area bg-gray section-padding-80">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Leave message</h2>
                    <p>Our staff will call back later and answer your questions.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Form -->
                <form action="#" method="post" class="akame-contact-form border-0 p-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn akame-btn btn-3 mt-15 active">Send mail</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->
