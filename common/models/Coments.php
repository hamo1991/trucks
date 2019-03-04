<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "coments".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 */
class Coments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заглавие',
            'content' => 'Содержание',
        ];
    }
}
