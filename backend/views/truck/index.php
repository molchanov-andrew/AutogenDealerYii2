<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trucks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="truck-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Truck', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'brand_id',
            'category_id',
            'subcategory_id',
            'price',
            [
            'attribute' => 'main image',
                'format' =>'raw',
                'value' => function($model)
                {
                    return Html::img('/'.$model->getImage(), ['width' => '100px']);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
