<?php

/* @var $this yii\web\View */

$this->title = 'Наши Услуги';
?>
<section class="breadcrumb-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Наши Услуги</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>"><i
                                            class="icon_house_alt"></i> Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Наши Услуги</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="akame-service-area">
    <div class="myFlex">
        <?php
        if (!empty($services)) {
            foreach ($services as $service) {
                ?>
                <div class="myDiv">
                    <div class="single_padding single--service--item d-flex flex-wrap align-items-center">
                        <!-- Service Content -->
                        <div class="service-content">
                            <div class="service-text">
                                <h2><a href="<?= \yii\helpers\Url::to('@web/information/' . $service['slug']) ?>"><?= $service['title'] ?></a></h2>
                                <ul>
                                <?php
                                if ($service['description']) {
                                    $ser = explode('.', $service['description']);
                                    foreach ($ser as $s) {
                                        ?>
                                        <li style="padding-bottom: 12px"><span><?= $s ?></span></li>
                                        <?php
                                    }
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Service Thumbnail -->
                    </div>
                </div>
                <a href="<?= \yii\helpers\Url::to('@web/information/' . $service['slug']) ?>">
                    <div class="myDiv">

                        <div class="divImg service-thumbnail  jarallax"
                             style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/all/' . $service['image'] ?>);"></div>
                    </div>
                </a>

                <?php

            }
        }
        ?>
    </div>
</section>