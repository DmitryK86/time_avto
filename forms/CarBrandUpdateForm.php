<?php

namespace app\forms;

use app\models\CarBrand;

class CarBrandUpdateForm extends BaseCarBrandForm
{
    public function __construct(CarBrand $brand, array $config = [])
    {
        $this->setAttributes($brand->attributes);
        parent::__construct($config);
    }
}