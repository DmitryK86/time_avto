<?php

namespace app\forms;

use Yii;
use app\models\CarModel;

class CarModelCreateForm extends BaseCarModelForm
{
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                ['name', 'unique', 'targetClass' => CarModel::class, 'message' => Yii::t('app', 'Указаная модель существует.')]
            ]
        );
    }
}