<?php

namespace app\helpers;

class PhoneHelper
{
    public static function getPhone()
    {
        return \Yii::$app->params['phones'][0] ?? '';
    }
}
