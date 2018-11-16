<?php

namespace app\repositories;

use app\models\CarModel;
use yii\db\ActiveQuery;
use yii\data\DataProviderInterface;
use yii\data\ActiveDataProvider;

class CarModelRepository
{
    public function get(int $id): CarModel
    {
        return $this->getBy(['id' => $id]);
    }

    public function getAllModels(?int $id): DataProviderInterface
    {
        $query = CarModel::find()
            ->innerJoinWith('carBrand');
        if ($id) {
            $query->onCondition(['car_brand.id' => $id]);
        }
        return $this->getProvider($query);
    }

    public function save(CarModel $carModel): void
    {
        if (!$carModel->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    private function getBy(array $condition): CarModel
    {
        if (!$carModel = CarModel::find()->andWhere($condition)->limit(1)->one()) {
            throw new \DomainException('Model not found.');
        }
        return $carModel;
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