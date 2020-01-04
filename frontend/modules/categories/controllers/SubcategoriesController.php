<?php

namespace frontend\modules\categories\controllers;

use Yii;
use common\models\Categories;
use common\models\Bus;
use common\models\SubCategory;

/**
 * Class SubcategoriesController
 * @package frontend\modules\categories\controllers
 * @var $category_id
 * @var $subcategory_id
 * @var $brand_id
 */
class SubcategoriesController extends \yii\web\Controller
{
    public function actionBrandChoice($brand_id, $category_id, $subcategory_id)
    {

        $category = Categories::findOne(['id' => $category_id]);

        $tableName = $category->category_alter;
        switch ($tableName) {
            case 'Bus':
                $subCategoryBrandSorted = Bus::find()->where(['category_id' => $category_id, 'subcategory_id' => $subcategory_id, 'brand_id' => $brand_id])->all();
                break;
            case 'Selhoztechnika':
                $subCategoryBrandSorted = Selhoztechnika::find()->where(['category_id' => $category_id, 'subcategory_id' => $subcategory_id, 'brand_id' => $brand_id])->all();
                break;
            case 'BuildingTech':
                $subCategoryBrandSorted = BuildingTech::find()->where(['category_id' => $category_id, 'subcategory_id' => $subcategory_id, 'brand_id' => $brand_id])->all();
                break;
            case 'Tuning':
                $subCategoryBrandSorted = Tuning::find()->where(['category_id' => $category_id, 'subcategory_id' => $subcategory_id, 'brand_id' => $brand_id])->all();
                break;
            case 'SpecialTech':
                $subCategoryBrandSorted = SpecialTech::find()->where(['category_id' => $category_id, 'subcategory_id' => $subcategory_id, 'brand_id' => $brand_id])->all();
                break;
        }
        return $this->render('subcategory', ['category' => $category, 'subCategoryBrandSorted' => $subCategoryBrandSorted,]);
    }

    public function actionSubcategory($categoryId, $subcategoryId)
    {
        $category = Categories::findOne($categoryId);

        $model = Yii::$app->choosetable->chooseProductTable($categoryId);
        $subcategoryProductList = $model->getSubcategoryProductList($categoryId, $subcategoryId);
        return $this->render('subcategory', ['subcategoryProductList'=>$subcategoryProductList, 'category'=>$category]);
    }
}
