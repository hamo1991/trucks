<?php

namespace common\models;

use Yii;
use common\behaviors\SlugBehavior;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $slug
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }
//	public function behaviors()
//	{
//		return [
//			'slug' => [
//				'class' => SlugBehavior::className(),
//				'in_attribute' => 'title',
//				'out_attribute' => 'slug',
//			],
//		];
//	}


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['description', 'content'], 'string'],
            [['image', 'title', 'slug'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'content' => 'Content',
            'slug' => 'Slug',
        ];
    }
}
