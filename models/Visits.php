<?php

namespace app\models;

/**
 * This is the model class for table "visits".
 *
 * @property int $id
 * @property string $date
 * @property int $visits
 */
class Visits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'required'],
            [['visits'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'visits' => 'Visits',
        ];
    }
}
