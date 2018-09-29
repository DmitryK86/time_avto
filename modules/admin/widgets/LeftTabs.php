<?php
namespace app\modules\admin\widgets;

use \yii\base\Widget;

/**
 * Class LeftTabs
 * @package app\modules\admin\widgets
 */
class LeftTabs extends Widget
{
    public function run()
    {
       return $this->render('leftTabs');
    }
}