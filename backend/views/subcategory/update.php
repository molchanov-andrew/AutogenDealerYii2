<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SubCategory */

$this->title = 'Обновить подкатегорию: ' . $model->sub_category;
$this->params['breadcrumbs'][] = ['label' => 'Подкатегория', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sub_category, 'url' => ['view', 'sub_category' => $model->sub_category]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="sub-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
