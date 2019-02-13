<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        'js/akame.bundle.js',
        'js/bootstrap.min.js',
        'js/default-assets/active.js',
        'js/default-assets/avoid.console.error.js',
        'js/default-assets/classynav.js',
        'js/default-assets/jquery.scrollup.min.js',
        'js/imagesloaded.pkgd.min.js',
        'js/isotope.pkgd.min.js',
        'js/jarallax.min.js',
        'js/jarallax-video.min.js',
        'js/jquery.countdown.min.js',
        'js/jquery.counterup.min.js',
        'js/jquery.easing.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/owl.carousel.min.js',
        'js/popper.min.js',
        'js/avoid.console.error.js',
        'js/waypoints.min.js',
        'js/wow.min.js',
        'js/script.js'


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
