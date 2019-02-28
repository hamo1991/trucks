<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property int $tech_id
 * @property string $image
 * @property string $slug
 * @property string $is_new
 * @property string $title
 * @property string $description
 * @property int $price
 *
 * @property Pictures[] $pictures
 * @property Technology $tech
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', ], 'required'],
            [['tech_id', 'price'], 'integer'],
            [['is_new', 'description'], 'string'],
            [['image', 'slug', 'title'], 'string', 'max' => 255],
            [['tech_id'], 'exist', 'skipOnError' => true, 'targetClass' => Technology::className(), 'targetAttribute' => ['tech_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tech_id' => 'Tech ID',
            'image' => 'Image',
            'slug' => 'Slug',
            'is_new' => 'Is New',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictures()
    {
        return $this->hasMany(Pictures::className(), ['service_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTech()
    {
        return $this->hasOne(Technology::className(), ['id' => 'tech_id']);
    }
}
