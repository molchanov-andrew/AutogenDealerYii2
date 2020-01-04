<?php

namespace frontend\modules\product\controllers;

use yii\web\Controller;

/**
 * Product controller for the `product` module
 */
class ProductController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
