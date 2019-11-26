<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $category
 */
class Categories extends \yii\db\ActiveRecord
{
    /*
     {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [[['category'], 'required'], [['category'], 'string', 'max' => 30],];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return ['id' => 'ID', 'category' => 'Category',];
    }

    public function getCategories()
    {
        return $this->find()->all();
    }

    public function getSubCategoriesList()
    {
      return  $this->hasMany(SubCategory::class,['category_id'=>'id'])->groupBy('sub_category')->all();
    }
    public function getSubCategoriesItemCount()
    {
      return  $this->hasMany(SubCategory::class,['category_id'=>'id'])->count();
    }

    public function getImage()
    {
        return Yii::$app->storage->getUploadedFile($this->category_picture);
    }
}
