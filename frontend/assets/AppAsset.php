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
//    加载css
    public $css = [
        'statics/css/site.css',
        'statics/css/font-awesome/css/font-awesome.min.css',
    ];
//    加载js
    public $js = [
        'statics/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
