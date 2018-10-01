<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content_items".
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string $type
 * @property int $enabled
 * @property string $comment
 * @property string $icon
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $seo_h1
 */
class MenuItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'title'], 'required'],
            [['type'], 'string'],
            [['enabled'], 'integer'],
            [['slug', 'title', 'seo_h1'], 'string', 'max' => 50],
            [['comment', 'icon', 'seo_keywords', 'seo_description'], 'string', 'max' => 250],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'slug' => Yii::t('app', 'Slug'),
            'title' => Yii::t('app', 'Название'),
            'enabled' => Yii::t('app', 'Включено'),
            'comment' => Yii::t('app', 'Коментарий'),
            'icon' => Yii::t('app', 'Иконка'),
            'seo_keywords' => Yii::t('app', 'Seo Ключевые слова'),
            'seo_description' => Yii::t('app', 'Seo Описание'),
            'seo_h1' => Yii::t('app', 'Заголовок h1'),
        ];
    }
}
