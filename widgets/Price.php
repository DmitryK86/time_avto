<?php
namespace app\widgets;

use yii\base\Widget;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * Class Price
 * @package app\widgets
 */
class Price extends Widget
{
    public $model;

    public function run()
    {
        $query = (new Query())->from('subservice_items')->where(['service_id' => $this->model->id]);
        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        return $this->render('price', ['provider' => $provider]);
    }
}