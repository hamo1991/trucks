<section class="akame-blog-details-area section-padding-80">
    <div class="container">

        <?php
        if (!empty($content)) {
            foreach ($content as $c) {
                ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="post-content">
                            <h2 class="post-title"><?= $c['title'] ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="post-thumbnail mb-50">
                            <img src="<?= \yii\helpers\Url::to('@web/images/uploads/all/' . $c['image']) ?>"
                                 alt="Photo">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">


                    <div class="col-10 col-md-10 col-lg-9">
                        <div class="blog-details-text">
                            <!-- Blockquote -->
                            <blockquote class="akame-blockquote">
                                <div class="text">
                                    <h2><?= $c['content'] ?></h2>
                                </div>
                            </blockquote>
                            <ul>
                                <?php
                                if ($c['description']) {

                                    $li = explode('.', $c['description']);
                                    foreach ($li as $l) {
                                        ?>
                                        <li><span><i class="fa fa-circle" aria-hidden="true"></i><?= $l ?></span></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>