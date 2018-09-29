<?php
namespace app\components\behaviors;

use app\components\VisitorComponent;
use \yii\base\Behavior;
use yii\web\Controller;

/**
 * Class AccessBehavior
 * @package app\components\behaviors
 */
class AppBehavior extends Behavior
{
    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'beforeAction',
            Controller::EVENT_AFTER_ACTION => 'afterAction',
        ];
    }

    public function beforeAction(){
        if (VisitorComponent::isNewVisitor()){
            VisitorComponent::updateVisitsCounters();
        }
    }

    public function afterAction(){
        return true;
    }
}