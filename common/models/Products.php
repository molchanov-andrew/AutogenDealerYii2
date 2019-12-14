<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $brand_id
 * @property int $category_id
 * @property int $subcategory_id
 * @property string $article
 * @property string $name
 * @property string $price
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'category_id', 'subcategory_id', 'name', 'price'], 'required'],
            [['brand_id', 'category_id', 'subcategory_id'], 'integer'],
            [['article', 'name', 'price'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Бренд',
            'category_id' => 'Категория',
            'subcategory_id' => 'Подкатегория',
            'article' => 'Артикул',
            'name' => 'Наименование',
            'price' => 'Цена',
        ];
    }
}
