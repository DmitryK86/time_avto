<?php
namespace app\widgets;

use app\models\MenuItems;
use yii\base\Widget;
/**
 * Class HeaderMenu
 * @package app\widgets
 */
class Menu extends Widget
{
    public function run()
    {
        $menuItems = MenuItems::findAll(['enabled' => true]);

        return $this->render('menu', ['items' => $menuItems]);
    }
}