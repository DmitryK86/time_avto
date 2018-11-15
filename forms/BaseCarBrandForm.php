<?php

namespace app\forms;

use Yii;
use yii\base\Model;

class BaseCarBrandForm extends Model
{
    public $name;
    public $logo;
    public $description;
    public $status;

    public function rules()
    {
        return [
            [['name', 'logo', 'description'], 'string'],
            ['status', 'boolean'],
            ['name', 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Марка авто'),
            'logo' => Yii::t('app', 'Логотип'),
            'description' => Yii::t('app', 'Краткое описание'),
            'status' => Yii::t('app', 'Статус'),
        ];
    }
}