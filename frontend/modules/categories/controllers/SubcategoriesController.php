<?php

namespace frontend\modules\categories\controllers;

use app\modules\categories\models\SubCategories;

class SubcategoriesController extends \yii\web\Controller
{
    public function actionSubcategorys($id = 1)
    {
        $query = SubCategories::find()->where(['category_id'=>$id])->all();

        return $this->render('index');
    }

}
