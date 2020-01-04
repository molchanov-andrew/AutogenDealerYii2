<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property int $brand_id
 * @property string $category
 * @property string $category_alter
 */
class Categories extends ActiveRecord
{
    public $categoryPicture;
    /**
     * {@inheritdoc}
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
        return [
            [['brand_id', 'category', 'category_alter'], 'required'],
            [['brand_id'], 'integer'],
            [['category', 'category_alter'], 'string', 'max' => 255],
            [['categoryPicture'], 'image', 'extensions' => ['jpg', 'png'], 'checkExtensionByMimeType' => true],
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
            'category' => 'Категория',
            'category_alter' => 'Категория (eng)',
            'category_picture' => 'Категория (изображение)'
        ];
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
