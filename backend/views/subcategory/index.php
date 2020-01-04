<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подкатегория';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить подкатегорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute' => 'category_id',
                'format' => 'raw',
                'value'=> function($model)
                {

                    return Html::encode($model->getCategoryName($model->category_id)->category);
die;
                }
            ],
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
                    return Html::encode($model->sub_category);
                }
            ],
            'sub_category_alter',
            ['attribute' => 'sub_category_picture',
                'format' => 'raw',
                'value' => function($subcategory)
                {
                    return Html::img('/'.$subcategory->getImage(),['width' => '100px']);
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
