<?php
namespace common\models;

use Yii;
use common\behaviors\SlugBehavior;

/**
 * This is the model class for table "technology".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $description
 * @property string $image
 * @property int $price_date
 * @property int $min_price
 * @property string $is_new
 * @property string $slug
 *
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
            [['price_date', 'min_price'], 'integer'],
            [['is_new'], 'string'],
            [['content','description'], 'string'],
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
            'content' => 'Content',
            'description' => 'Description',
            'image' => 'Image',
            'price_date' => 'Price Date',
            'min_price' => 'Min Price',
            'is_new' => 'Is New',
            'slug' => 'Slug',
        ];
    }

}
