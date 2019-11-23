<?php

namespace frontend\modules\categories\controllers;

use app\modules\categories\models\Categories;
use yii\web\Controller;


class CategoryController extends Controller
{
    public function actionCategoryPage($id)
    {
        $category = Categories::findOne(['id'=>$id]);


        return $this->render('category',['category'=>$category]);
    }



}