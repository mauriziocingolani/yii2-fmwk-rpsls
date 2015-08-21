<?php

namespace mauriziocingolani\yii2fmwkrpsls;

use yii\web\AssetBundle;

class RpslsAsset extends AssetBundle {

    public $sourcePath = '@vendor/mauriziocingolani/yii2-fmwk-rpsls/assets';
    public $autogenerate = true;
    public $js = [
        'rpsls.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
