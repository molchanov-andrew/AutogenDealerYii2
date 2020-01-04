<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bus".
 *
 * @property int $id
 * @property int $brand_id
 * @property int $category_id
 * @property int $subcategory_id
 * @property string $article
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $power
 * @property string $vehicle
 * @property string $transmission
 * @property string $weight
 * @property int $passengers_number
 */
class Bus extends \yii\db\ActiveRecord
{
    public $busPicture;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'category_id', 'subcategory_id', 'name', 'description', 'price', 'power', 'vehicle', 'transmission', 'weight', 'passengers_number'], 'required'],
            [['brand_id', 'category_id', 'subcategory_id', 'passengers_number'], 'integer'],
            [['article', 'description', 'price', 'power', 'vehicle', 'transmission', 'weight'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 10],
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
            'description' => 'Описание',
            'price' => 'Цена',
            'power' => 'Мощность',
            'vehicle' => 'Двигатель',
            'transmission' => 'Коробка',
            'weight' => 'Вес',
            'passengers_number' => 'Пассажировместимость',
            'picture' => 'Изображение',
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
