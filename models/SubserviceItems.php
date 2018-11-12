<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subservice_items".
 *
 * @property int $id
 * @property int $service_id
 * @property string $title
 * @property string $price
 * @property bool $is_main
 * @property bool $enabled
 */
class SubserviceItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subservice_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'title', 'price'], 'required'],
            [['service_id'], 'integer'],
            [['price'], 'string', 'min' => 1, 'max' => 20],
            [['title'], 'string', 'max' => 150],
            [['is_main', 'enabled'], 'boolean']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'service_id' => Yii::t('app', 'Сервис ID'),
            'title' => Yii::t('app', 'Наименование работ'),
            'price' => Yii::t('app', 'Стоимость, грн.'),
            'is_main' => Yii::t('app', 'Основной'),
            'enabled' => Yii::t('app', 'Включен'),
        ];
    }

    public function getService()
    {
        return $this->hasOne(ServiceItems::class, ['id' => 'service_id']);
    }
}
