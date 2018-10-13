<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class BaseActiveRecord
 * @package app\models
 */
class BaseActiveRecord extends ActiveRecord
{
    public function toggle(){
        $this->enabled = !$this->enabled;
        return $this->save(false);
    }
}