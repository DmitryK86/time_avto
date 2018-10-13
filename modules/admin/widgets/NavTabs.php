<?php
namespace app\modules\admin\widgets;

use yii\base\Widget;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * Class NavTabs
 * @package app\modules\admin\widgets
 */
class NavTabs extends Widget
{
    public $tabs = [];
    public $withDefaultTabs = true;
    public $controllerName;

    public function run()
    {
        if ($this->withDefaultTabs){
            $this->tabs = ArrayHelper::merge($this->getDefaultTabs(), $this->tabs);
        }

        if ($this->tabs){
            return $this->render('navTabs', ['tabs' => $this->tabs]);
        }

        return null;
    }

    protected function getDefaultTabs(){
        if (!$this->controllerName){
            return null;
        }

        return [
            ['label' => 'Просмотр всех', 'url' => Url::to('index'), 'active' => 'active'],
            ['label' => 'Создать', 'url' => Url::to('create')],
        ];
    }
}