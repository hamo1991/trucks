<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use common\behaviors\SlugBehavior;
/**
 * This is the model class for table "service".
 *
 * @property int $id
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
	public function behaviors()
	{
		return [
			'slug' => [
				'class' => SlugBehavior::className(),
				'in_attribute' => 'title',
				'out_attribute' => 'slug',
			],
			];
	}

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', ], 'required'],
            [['price'], 'integer'],
            [['is_new', 'description'], 'string'],
            [['image', 'slug', 'title'], 'string', 'max' => 255],
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

}
