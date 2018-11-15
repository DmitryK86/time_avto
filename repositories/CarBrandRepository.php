<?php

namespace app\repositories;

use app\models\CarBrand;
use yii\data\DataProviderInterface;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;

class CarBrandRepository
{
    public function get(int $id): CarBrand
    {
        return $this->getBy(['id' => $id]);
    }

    public function getAllBrands(): DataProviderInterface
    {
        $query = CarBrand::find();
        return $this->getProvider($query);
    }

    public function save(CarBrand $carBrand): void
    {
        if (!$carBrand->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    private function getBy(array $condition): CarBrand
    {
        if (!$carBrand = CarBrand::find()->andWhere($condition)->limit(1)->one()) {
            throw new \DomainException('Brand not found.');
        }
        return $carBrand;
    }

    private function getProvider(ActiveQuery $query): ActiveDataProvider
    {
        return new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['name' => SORT_ASC]
            ],
            'pagination' => [
                'pageSize' => 20
            ]
        ]);
    }
}