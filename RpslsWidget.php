<?php

namespace mauriziocingolani\yii2fmwkrpsls;

use Yii;
use yii\base\Widget;

class RpslsWidget extends Widget {

    public function run() {
        require_once 'RpslsAsset.php';
        RpslsAsset::register($this->getView());
        return $this->render('rpslsWidget');
    }

}
