<?php

namespace frontend\modules\brands\controllers;

use common\models\Brand;
use common\models\Categories;
use common\models\SubCategory;
use Yii;

class BrandController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBrandSorted($category_id, $subcategory_id, $brand_id)
    {

        $category = Categories::findOne(['id' => $category_id]);

        // choosing product table
        $model = Yii::$app->choosetable->chooseProductTable($category_id);
        $subcategory = SubCategory::findOne($subcategory_id);

        // choosing product sorted by brand, category and subcategory
        $subcategoryBrandsorted = $model->find()->where(['category_id' => $category_id, 'subcategory_id' => $subcategory_id, 'brand_id' => $brand_id])->all();

        return $this->renderAjax('brandSubcategory', ['model' => $subcategoryBrandsorted, 'category' => $category, 'subcategory' => $subcategory]);
    }

    public function actionBrandProducts($brandId, $categoryId)
    {
        $subcategoryBrandProducts = SubCategory::find()->where(['category_id'=>$categoryId, 'brand_id'=>$brandId])->all();
        return $this->renderAjax('brandSelectedView', ['subcategoryBrandProducts' => $subcategoryBrandProducts]);
    }
}
