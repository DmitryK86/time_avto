<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%car_model}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status
 * @property int $car_brand_id
 *
 * @property CarBrand $carBrand
 */
class CarModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%car_model}}';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'car_brand_id' => Yii::t('app', 'Car Brand ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBrand()
    {
        return $this->hasOne(CarBrand::className(), ['id' => 'car_brand_id']);
    }
}
