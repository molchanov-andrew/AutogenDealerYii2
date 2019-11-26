<?php

namespace frontend\modules\categories\controllers;

use app\modules\categories\models\Categories;

class SubcategoriesController extends \yii\web\Controller
{
    public function actionBrandChoice($brand_id, $category_id)
    {

//        $query = SubCategory::find()->where(['category_id'=>$category_id])->all();
        $category = Categories::findOne(['id'=>$category_id]);

        return $this->render('subcategory',['category'=>$category]);
    }

}
