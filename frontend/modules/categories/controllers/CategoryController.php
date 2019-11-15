<?php

namespace frontend\modules\categories\controllers;

use yii\web\Controller;


class CategoryController extends Controller
{
    public function actionSubcategoryList($id, $category, $category_alter)
    {

        return $this->render('subcategory',['id'=>$id,
            'category'=>$category,
            'category_alter'=>$category_alter,]);
    }
}