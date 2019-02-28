<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chooseus".
 *
 * @property int $id
 * @property string $title
 * @property string $reasonone
 * @property string $reasontwo
 * @property string $reasonthree
 * @property string $reasonfour
 */
class Chooseus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chooseus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', ],'required'],
            [['title', 'reasonone', 'reasontwo', 'reasonthree', 'reasonfour'], 'string', 'max' => 255],
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
	        'image'=>'Картина',
            'reasonone' => 'Первая причина',
            'reasontwo' => 'Вторая причина',
            'reasonthree' => 'Третья причина',
            'reasonfour' => 'Четвертая причина',
        ];
    }
}
