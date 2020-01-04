<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sub_category".
 *
 * @property int $id
 * @property int $category_id
 * @property int $brand_id
 * @property string $sub_category
 * @property string $sub_category_alter
 * @property string $sub_category_picture
 */
class SubCategory extends \yii\db\ActiveRecord
{
    public $subCategoryPicture;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [[['category_id', 'brand_id'], 'required'], [['category_id', 'brand_id'], 'integer'], [['sub_category', 'sub_category_alter', 'sub_category_picture'], 'string', 'max' => 255],];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return ['id' => 'ID', 'category_id' => 'Category ID', 'brand_id' => 'Brand ID', 'sub_category' => 'Подкатегория', 'sub_category_alter' => 'Подкатегория (eng)', 'sub_category_picture' => 'Подкатегория (изображение)',];
    }

    public function getImage()
    {
        return Yii::$app->storage->getUploadedFile($this->sub_category_picture);
    }

    public function getCountSubcategoryItems()
    {
        $model = Yii::$app->choosetable->chooseProductTable($this->category_id);
        return $model->find()->where(['category_id' => $this->category_id, 'subcategory_id' => $this->id])->count();
    }

    public function getSubcategoriesBrandSorted()
    {
        $model = Yii::$app->choosetable->chooseProductTable($this->category_id);

        return $model->find()->where(['category_id' => $this->category_id, 'subcategory_id' => $this->id])->groupBy('brand_id')->all();

    }

    public function getCategoryName()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id'])->one();
    }
    public function getBrand()
    {
        return $this->hasOne(Brand::class, ['id'=>'brand_id'])->one();
    }

}
