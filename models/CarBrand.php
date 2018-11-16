<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%car_brand}}".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property string $description
 * @property int $status
 *
 * @property CarModel[] $carModels
 */
class CarBrand extends \yii\db\ActiveRecord
{
    public const CAR_BRAND_STATUS_DISABLED = 0;
    public const CAR_BRAND_STATUS_ENABLED  = 1;

    public static function create(string $name, string $logo, string $description, int $status): self
    {
        $brand = new static();
        $brand->name = $name;
        $brand->logo = $logo;
        $brand->description = $description;
        $brand->status = $status;

        return $brand;
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%car_brand}}';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Марка авто'),
            'logo' => Yii::t('app', 'Логотип'),
            'description' => Yii::t('app', 'Краткое описание'),
            'status' => Yii::t('app', 'Статус'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarModels()
    {
        return $this->hasMany(CarModel::class, ['car_brand_id' => 'id']);
    }
}
