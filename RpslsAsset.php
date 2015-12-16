<?php

namespace mauriziocingolani\yii2fmwkrpsls;

use yii\web\AssetBundle;

/**
 * Rpsls asset bundle.
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @version 1.0
 */
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
