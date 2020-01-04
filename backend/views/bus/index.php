<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Автобусы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить модель', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
        ['attribute' => 'brand_id',
            'format' => 'raw',
            'value'=> function($model)
            {

                return Html::encode($model->getBrand($model->brand_id)->brand_name);
            }
        ],
            ['attribute' => 'subcategory_id',
            'format' => 'raw',
            'value'=> function($model)
            {
                return Html::encode($model->getSubCategory()->sub_category);
            }
        ],
            ['attribute' => 'category_id',
            'format' => 'raw',
            'value'=> function($model)
            {
                return Html::encode($model->getCategory()->category);
            }
        ],
            'article',
            'name',
            'price',
            'power',
            'vehicle',
            'transmission',
            'weight',
            'passengers_number',
            [
            'attribute' => 'picture',
                'format' =>'raw',
                'value' => function($model)
                {
                    return Html::img('/'.$model->getImage(), ['width' => '100px']);
                }
            ],
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
