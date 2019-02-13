<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "technology".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property int $price_date
 * @property int $min_price
 * @property string $is_new
 * @property string $slug
 *
 * @property Pictures[] $pictures
 * @property Service[] $services
 */
class Technology extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'technology';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price_date', 'min_price', 'slug'], 'required'],
            [['price_date', 'min_price'], 'integer'],
            [['is_new'], 'string'],
            [['title', 'image', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'price_date' => 'Price Date',
            'min_price' => 'Min Price',
            'is_new' => 'Is New',
            'slug' => 'Slug',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictures()
    {
        return $this->hasMany(Pictures::className(), ['technology_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['tech_id' => 'id']);
    }
}
