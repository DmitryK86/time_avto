<?php
namespace app\widgets;

use app\models\ContentItems;
use yii\base\Widget;
/**
 * Class HeaderMenu
 * @package app\widgets
 */
class Menu extends Widget
{
    public function run()
    {
        $menuItems = ContentItems::findAll(['enabled' => true, 'type' => ContentItems::TYPE_MENU]);

        return $this->render('menu', ['items' => $menuItems]);
    }
}