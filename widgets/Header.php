<?php
namespace app\widgets;

use yii\base\Widget;
/**
 * Class Header
 * @package app\widgets
 */
class Header extends Widget
{
    public function run()
    {
        return $this->render('header');
    }
}