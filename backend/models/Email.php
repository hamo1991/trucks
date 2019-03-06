<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property string $id
 * @property string $email
 * @property string $name
 * @property string $content
 * @property string $date
 * @property integer $tel
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'content'], 'required'],
            [['date'], 'safe'],
            [['tel'], 'integer'],
            [['email'], 'string', 'max' => 150],
            [['content','name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Имя',
            'content' => 'Content',
            'date' => 'Date',
            'tel' => 'Tel',
        ];
    }
}
