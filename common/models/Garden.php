<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "garden".
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $content
 */
class Garden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'garden';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['image', 'title', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }
}
