<?php

/* @var $this yii\web\View */

$this->title = 'Trucks';
?>
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <?php
        if (!empty($slider)) {
            foreach ($slider as $slide) {
                ?>
                <div class="single-welcome-slide bg-img"
                     style="background-image: url(<?= '/images/uploads/slider/' . $slide['image'] ?>);">
                    <!-- Welcome Content -->
                    <div class="welcome-content h-100">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12 col-md-9 col-lg-6">
                                    <div class="welcome-text">
                                        <h2 data-animation="fadeInUp" data-delay="100ms"><?= $slide['title'] ?></h2>
                                        <p data-animation="fadeInUp" data-delay="400ms"><?= $slide['content'] ?></p>
                                        <!--                                        <a href="-->
                                        <?//= \yii\helpers\Url::to(['/']) . 'site/about' ?><!--" class="btn akame-btn" data-animation="fadeInUp" data-delay="700ms">About Us</a>-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Why Choose Us Area Start -->
<section class="why-choose-us-area bg-gray section-padding-80-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="choose-us-thumbnail mt-30 mb-80">
                    <div class="choose-us-img bg-img"
                         style="background-image: url(<?= \yii\helpers\Url::to(['/images/uploads/chuseus/']) . '/' . $choose[0]['image'] ?>);"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <?php
                if (!empty($choose)) {
                    foreach ($choose as $chus) {
                        ?>
                        <div class="section-heading">
                            <h2><?= $chus['title'] ?></h2>
                            <p>Есть много причин зачем вибрат нас...
                                </p>
                        </div>
                        <!-- Choose Us Content -->
                        <div class="choose-us-content mt-30 mb-80">
                            <ul>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><?= $chus['reasonone'] ?>
                                </li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><?= $chus['reasontwo'] ?>
                                </li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><?= $chus['reasonthree'] ?>
                                </li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><?= $chus['reasonfour'] ?>
                                </li>
                            </ul>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us Area End -->

<!-- Portfolio Area Start -->
<section class="akame-portfolio section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Доставка  материалов</h2>
                    <p>Сыпучие материалы</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-menu text-center mb-30">

                </div>
            </div>
        </div>

        <div class="row akame-portfolio-area">

            <?php
            if (!empty($products)) {
                foreach ($products as $key => $value) {
                    if ($key == 1) {
                        ?>

                        <!-- Single Portfolio Item -->
                        <div class="col-12 col-sm-6 akame-portfolio-item dye mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="akame-portfolio-single-item">
                                <img src="<?= \yii\helpers\Url::to(['/images/uploads/products']) . '/' . $value['image'] ?>"
                                     alt="">

                                <!-- Overlay Content -->
                                <div class="overlay-content d-flex align-items-center justify-content-center">
                                    <div class="overlay-text text-center">
                                        <h4><?= $value['title'] ?></h4>

                                    </div>
                                </div>

                                <!-- Thumbnail Zoom -->
                                <a href="<?= \yii\helpers\Url::to(['/images/uploads/products']) . '/' . $value['image'] ?>"
                                   class="thumbnail-zoom"><i
                                            class="icon_search"></i></a>
                            </div>
                        </div>


                        <?php
                    } else {
                        ?>
                        <!-- Single Portfolio Item -->
                        <div class="col-12 col-sm-6 col-lg-3 akame-portfolio-item haircuts mb-30 wow fadeInUp"
                             data-wow-delay="200ms">
                            <div class="akame-portfolio-single-item">
                                <img src="<?= \yii\helpers\Url::to(['/images/uploads/products']) . '/' . $value['image'] ?>"
                                     alt="">

                                <!-- Overlay Content -->
                                <div class="overlay-content d-flex align-items-center justify-content-center">
                                    <div class="overlay-text text-center">
                                        <h4><?= $value['title'] ?></h4>
                                        <p><?= $value['content'] ?></p>
                                    </div>
                                </div>

                                <!-- Thumbnail Zoom -->
                                <a href="<?= \yii\helpers\Url::to(['/images/uploads/products']) . '/' . $value['image'] ?>"
                                   class="thumbnail-zoom"><i
                                            class="icon_search"></i></a>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- Portfolio Area End -->
<!-- Border -->
<div class="container">
    <div class="border-top mt-3"></div>
</div>
<!-- Our Service Area Start -->
<section class="akame-service-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Our Services</h2>
                    <p>The House of Hair Salon &amp; Spa, incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

        <div class="row owl">

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/s1.png' ?>" alt="">
                    <h5>Coloring</h5>
                    <p>Ut enim ad minim veniam, quis trud exercitation...</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/s3.png' ?>" alt="Photo">
                    <h5>Haircut</h5>
                    <p>Consectetur adipisicing elit, sed doe eiusmod.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/s4.png' ?>" alt="">
                    <h5>Hairstyle</h5>
                    <p>Nemo enim ipsam voluptatem quia voluptas</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="800ms">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/s3.png' ?>" alt="">
                    <h5>Coloring</h5>
                    <p>Ut enim ad minim veniam, quis trud exercitation...</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Our Service Area End -->

<!-- Our Expert Area Start -->
<section class="akame-our-expert-area section-padding-80-0">

    <!-- Side Thumbnail -->
    <div class="side-thumbnail"
         style="background-image: url(<?= \yii\helpers\Url::to(['/images/uploads/garden/blogoustroystva.jpg']) ?>);">
    </div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>Благоустройство</h2>
                    <p>Все проводимые работы по озеленению и благоустройству мы осуществляем качественно, быстро и
                        всегда добиваемся поставленных Вами задач.</p>
                </div>
                <!-- Our Certificate -->
                <div class="text-center our-certificate-area mb-60">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/certificate-1.png' ?>" alt="Logo">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/certificate-2.png' ?>" alt="Logo">
                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/certificate-3.png' ?>" alt="Logo">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <?php
            if (!empty($garden)) {
                foreach ($garden as $g) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-team-member mb-80 wow fadeInUp" data-wow-delay="300ms">
                            <div>
                                <img src="<?= \yii\helpers\Url::to(['/images/uploads/garden/']) . '/' . $g['image'] ?>" alt="Garden">
                            </div>
                            <div class="team-member-info">
                                <h5 style="font-size: 25px"><?= $g['title'] ?></h5>
                                <p><?= $g['content'] ?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>


        </div>
    </div>
</section>
<!-- Our Expert Area End -->

<!-- Border -->
<div class="container">
    <div class="border-top mt-3"></div>
</div>

<!-- Call To Action Area Start -->
<section class="akame-cta-area bg-gray section-padding-80"
         style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/banner-1.jpg' ?>);background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-xl-5">
                <div class="cta-content">
                    <h2 style="color: white">Лучшее предложение на рынке!</h2>
                    <p style="color: white;font-weight: bold;font-size: 17px">Быстрая доставка и точное соблюдение
                        сроков</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Thumbnail -->
    <div class="cta-thumbnail bg-img"></div>
</section>