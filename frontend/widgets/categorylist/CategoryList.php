<?php

namespace frontend\widgets\categorylist;

use app\modules\brands\models\Brand;
use app\modules\categories\models\Categories;
use yii\base\Widget;

class CategoryList extends Widget
{
public function run()
{
    $model_categories = new Categories();
    $categoryList = $model_categories->getCategories();
    return $this->render('categories', ['categoryList'=>$categoryList]);
}
}