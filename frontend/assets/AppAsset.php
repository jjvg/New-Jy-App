<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@vendor/bower-asset/iphone/';
    public $css = [
     'css/font-awesome.min.css',
     'css/bootstrap.min.css',
     'css/mdb.min.css',
     'css/style.css',
     'css/site.css',

    ];
    public $js = [

    'js/jquery-2.2.3.min.js',
    'js/tether.min.js',
    'js/bootstrap.min.js',
    'js/mdb.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
