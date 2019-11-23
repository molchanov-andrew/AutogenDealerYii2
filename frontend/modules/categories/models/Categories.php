<?php

namespace app\modules\categories\models;


/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $category
 */
class Categories extends \yii\db\ActiveRecord
{
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
        return $this->find()->asArray()->all();
    }
    public function getSubcategoriesList()
    {
      return  $this->hasMany(SubCategory::class,['category_id'=>'id'])->groupBy('sub_ctgry')->all();
    }
    public function getSubcategoriesCount()
    {
        return $this->hasMany(SubCategory::class,['category_id'=>'id'])->count();
    }

}
