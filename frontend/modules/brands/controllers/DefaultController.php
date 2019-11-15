<?php

namespace frontend\modules\brands\controllers;

use app\modules\brands\models\Brand;
use yii\web\Controller;

/**
 * Default controller for the `brands` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new Brand();
        return $this->render('index',['model'=>$model]);
    }
}
