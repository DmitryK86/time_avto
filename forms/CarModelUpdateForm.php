<?php

namespace app\forms;

use app\models\CarModel;

class CarModelUpdateForm extends BaseCarModelForm
{
    public function __construct(CarModel $model, array $config = [])
    {
        $this->setAttributes($model->attributes);
        parent::__construct($config);
    }
}