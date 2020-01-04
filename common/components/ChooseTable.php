<?php

namespace common\components;

use yii\base\Component;
use common\models\Categories;
use common\models\Bus;
use common\models\Truck;

class ChooseTable extends Component
{
    public function chooseProductTable($category_id)
    {

        $category = Categories::findOne(['id' => $category_id]);

        $tableName = $category->category_alter;
        switch ($tableName) {
            case 'Bus':
                $model = new Bus();
                break;
            case 'Selhoztechnika':
                $model = new Selhoztechnika();
                break;
            case 'BuildingTech':
                $model = new BuildingTech();
                break;
            case 'Tuning':
                $model = new Tuning();
                break;
            case 'SpecialTech':
                $model = new SpecialTech();
                break;
            case 'Truck':
                $model = new Truck();
                break;
        }
        return $model;

    }
}