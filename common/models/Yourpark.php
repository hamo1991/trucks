<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yourpark".
 *
 * @property int $id
 * @property string $background
 * @property string $title
 * @property string $description
 * @property string $img
 * @property string $text
 */
class Yourpark extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yourpark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['background', 'title', 'description', 'img', 'text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'background' => 'Фон',
            'title' => 'Title',
            'description' => 'Характеристика',
            'img' => 'Фото',
            'text' => 'Text',
        ];
    }
}
