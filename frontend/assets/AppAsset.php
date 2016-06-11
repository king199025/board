<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fotorama.css',
        'css/owl.carousel.css',
        'sass/styles.css',
        'css/site.css',
    ];
    public $js = [
        /*'js/jquery-2.1.4.js',*/
        /*'js/bootstrap.min.js',*/
        'js/fotorama.js',
        'js/owl.carousel.min.js',
        'js/script.js',
        'js/general.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
