<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_items".
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property int $enabled
 * @property string $comment
 * @property string $icon
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $seo_h1
 */
class ServiceItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'title'], 'required'],
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
            'id' => 'ID',
            'slug' => 'Slug',
            'title' => 'Title',
            'enabled' => 'Enabled',
            'comment' => 'Comment',
            'icon' => 'Icon',
            'seo_keywords' => 'Seo Keywords',
            'seo_description' => 'Seo Description',
            'seo_h1' => 'Seo H1',
        ];
    }
}
