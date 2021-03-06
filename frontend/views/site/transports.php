<?php

/* @var $this yii\web\View */

$this->title = 'Спецтехника';
?>

<section class="breadcrumb-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Спецтехника</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>"><i class="icon_house_alt"></i> Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Спецтехника</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Portfolio Area Start -->
<section class="akame-portfolio section-padding-0-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-menu text-center mb-50">
                    <button class="btn active" data-filter="*">Все</button>
                    <?php  if(!empty($transports)){
                        foreach ($transports as $transport){
                            ?>
<!--                            <button class="btn" data-filter=".--><?//= $transport['title'] ?><!--">--><?//= $transport['title']?><!--</button>-->
                            <?php
                        }

                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row akame-portfolio-area">
            <?php  if (!empty($transports)){
                foreach ($transports as $trans){
                    $string = str_replace(' ', '', $trans['title'])
                    ?>
                    <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item <?=$string?> mb-30 wow fadeInUp" data-wow-delay="200ms">
                        <div class="akame-portfolio-single-item">
                            <img src="<?= \yii\helpers\Url::to('@web/images/uploads/all/' . $trans['image']) ?>" alt="Image">

                            <!-- Overlay Content -->
                           <a href="<?= \yii\helpers\Url::to('@web/information/' . $trans['slug']) ?>"><div class="overlay-content d-flex align-items-center justify-content-center">
                                <div class="overlay-text text-center">
                                    <h4><?= $trans['title']?></h4>
<!--                                    <p>Consectetur adipisicing elit sed doe</p>-->
                                </div>
                            </div>
                           </a>
                            <!-- Thumbnail Zoom -->
                            <a href="<?= \yii\helpers\Url::to('@web/images/uploads/all/' . $trans['image']) ?>" class="thumbnail-zoom"><i class="icon_search"></i></a>
                        </div>
                    </div>
            <?php
                }
            }?>

        </div>

<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="view-all-btn mt-30 text-center">-->
<!--                    <a href="" class="btn akame-btn">Посмотреть все</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>
