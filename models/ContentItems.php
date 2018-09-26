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
 */
class ContentItems extends \yii\db\ActiveRecord
{
    const TYPE_MENU = 'menu';
    const TYPE_SERVICE = 'service';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'title', 'type'], 'required'],
            [['type'], 'string'],
            [['enabled'], 'integer'],
            [['slug', 'title'], 'string', 'max' => 50],
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
            'type' => 'Type',
            'enabled' => 'Enabled',
            'comment' => 'Comment',
            'icon' => 'Icon',
            'seo_keywords' => 'Seo Keywords',
            'seo_description' => 'Seo Description',
        ];
    }
}
