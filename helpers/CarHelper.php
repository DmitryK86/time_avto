<?php

namespace app\helpers;

use app\models\CarBrand;
use yii\helpers\ArrayHelper;

class CarHelper
{
    public static function getListOfBrands()
    {
        $brands = CarBrand::find()
            ->select(['id', 'name'])
            ->orderBy(['name' => SORT_ASC])
            ->asArray()
            ->all();
        return ArrayHelper::map($brands, 'id', 'name');
    }
}