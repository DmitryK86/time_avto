<?php
namespace app\modules\admin;

use app\components\VisitorComponent;
use yii\base\Module;

/**
 * Class AdminModule
 * @package app\modules\admin
 */
class AdminModule extends Module
{
    public function init()
    {
        parent::init();
    }

    public function afterAction($action, $result)
    {
        // ставим куку для админов, дабы не портить стату посещений
        VisitorComponent::setCookie(VisitorComponent::VISITOR_ADMIN, 1);
        return parent::afterAction($action, $result);
    }
}