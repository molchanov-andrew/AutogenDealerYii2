<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "truck".
 *
 * @property int $id
 * @property int $brand_id
 * @property int $category_id
 * @property int $subcategory_id
 * @property int $price
 * @property string $picture
 * @property string $name
 */
class Truck extends \yii\db\ActiveRecord
{
    public $mainTruckImage;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'truck';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'category_id', 'subcategory_id', 'price'], 'integer'],
            [['picture', 'name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Модель',
            'brand_id' => 'Бренд',
            'category_id' => 'Категория',
            'subcategory_id' => 'Подкатегория',
            'picture' => 'Изображение',
            'price' =>'Цена от',
        ];
    }
    public function getImage()
    {
        return Yii::$app->storage->getUploadedFile($this->picture);
    }

    public function getSubCategory()
    {
        return $this->hasOne(SubCategory::class, ['id' => 'subcategory_id'])->one();
    }
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id'])->one();
    }
    public function getBrand()
    {
        return $this->hasOne(Brand::class, ['id' => 'brand_id'])->one();
    }

    public function getSubcategoryProductList($categoryId, $subcategoryId)
    {
        return $this->find()->where(['category_id'=>$categoryId, 'subcategory_id'=>$subcategoryId])->all();
    }
}
