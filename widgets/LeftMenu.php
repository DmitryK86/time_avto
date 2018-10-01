<?php
namespace app\widgets;

use app\models\ServiceItems;
use yii\base\Widget;
/**
 * Class LeftMenu
 * @package app\widgets
 */
class LeftMenu extends Widget
{
    public function run()
    {
        $serviceItems = ServiceItems::findAll(['enabled' => true]);
        if ($serviceItems){
            return $this->render('leftMenu', ['serviceItems' => $serviceItems]);
        }
    }
}