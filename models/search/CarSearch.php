<?php

namespace app\models\search;

use app\models\CarModel;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class CarSearch extends CarModel
{
    private const PAGE_SIZE = 100;

    public function search($params)
    {
        $query = CarModel::find()
            ->innerJoinWith('carBrand');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => self::PAGE_SIZE
            ]
        ]);

        $dataProvider->setSort([
            /*'defaultOrder' => [
                'car_brand.name' => SORT_ASC,
                'car_model.name' => SORT_ASC
            ]*/
        ]);

        return $dataProvider;
    }
}