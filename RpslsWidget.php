<?php

namespace mauriziocingolani\yii2fmwkrpsls;

use Yii;
use yii\base\Widget;

/**
 * Rpsls widget. The <code>run()</code> method registers the <code>RpslsAsset</code>
 * to the current view and renders the widget view.
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @version 1.0
 */
class RpslsWidget extends Widget {

    public function run() {
        require_once 'RpslsAsset.php';
        RpslsAsset::register($this->getView());
        return $this->render('rpslsWidget');
    }

}
