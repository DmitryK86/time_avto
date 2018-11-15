<?php

namespace app\forms;

use Yii;
use yii\base\Model;
use app\models\CarBrand;

class BaseCarModelForm extends Model
{
    public $name;
    public $description;
    public $status;
    public $car_brand_id;

    public function rules()
    {
        return [
            [['name', 'description'], 'string'],
            [['name', 'car_brand_id'], 'required'],
            ['status', 'boolean'],
            ['car_brand_id', 'integer'],
            ['car_brand_id', 'exist', 'targetClass' => CarBrand::class, 'targetAttribute' => 'id']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Модель авто'),
            'description' => Yii::t('app', 'Краткое описание'),
            'status' => Yii::t('app', 'Статус'),
            'car_brand_id' => Yii::t('app', 'Бренд авто'),
        ];
    }
}