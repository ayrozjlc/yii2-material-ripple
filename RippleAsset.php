<?php
namespace ayrozjlc\ripple;

use yii\web\AssetBundle;

class RippleAsset extends AssetBundle
{
    public $sourcePath = '@npm/material-ripple';
    public $css = [
        'dist/ripple.min.css',
    ];
    public $js = [
        'dist/ripple.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}