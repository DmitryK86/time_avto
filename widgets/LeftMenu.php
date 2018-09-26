<?php
namespace app\widgets;
use app\models\ContentItems;
use yii\base\Widget;

/**
 * Class LeftMenu
 * @package app\widgets
 */
class LeftMenu extends Widget
{
    public function run()
    {
        $serviceItems = ContentItems::findAll(['enabled' => true, 'type' => ContentItems::TYPE_SERVICE]);
        if ($serviceItems){
            return $this->render('leftMenu', ['serviceItems' => $serviceItems]);
        }
    }
}