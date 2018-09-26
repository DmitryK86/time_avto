<?php
namespace app\widgets;

use yii\base\Widget;

/**
 * Class Footer
 * @package app\widgets
 */
class Footer extends Widget
{
    public function run()
    {
        return $this->render('footer');
    }
}