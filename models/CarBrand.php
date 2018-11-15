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
            'name' => Yii::t('app', 'Name'),
            'logo' => Yii::t('app', 'Logo'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarModels()
    {
        return $this->hasMany(CarModel::className(), ['car_brand_id' => 'id']);
    }
}
