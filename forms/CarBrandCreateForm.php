<?php

namespace app\forms;

use Yii;
use app\models\CarBrand;

class CarBrandCreateForm extends BaseCarBrandForm
{
    public $status = CarBrand::CAR_BRAND_STATUS_DISABLED;

    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                ['name', 'unique', 'targetClass' => CarBrand::class, 'message' => Yii::t('app', 'Указананый бренд существует.')]
            ]
        );
    }
}