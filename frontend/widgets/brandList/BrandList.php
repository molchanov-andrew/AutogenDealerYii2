<?php

namespace frontend\widgets\brandList;

use yii\base\Widget;
use common\models\Brand;

class BrandList extends Widget
{
    public $categoryId;
    public function run()
    {
        $brandList = Brand::find()->all();
        return $this->render('brands',['brandList'=>$brandList, 'categoryId'=>$this->categoryId]);
    }
}