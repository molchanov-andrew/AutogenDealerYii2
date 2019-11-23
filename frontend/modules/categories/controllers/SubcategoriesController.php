<?php

namespace frontend\modules\categories\controllers;

use app\modules\categories\models\SubCategory;

class SubcategoriesController extends \yii\web\Controller
{
    public function actionSubcategorys($id = 1)
    {
        $query = SubCategory::find()->where(['category_id'=>$id])->all();

        return $this->render('index');
    }

}
