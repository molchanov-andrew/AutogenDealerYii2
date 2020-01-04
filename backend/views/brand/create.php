<?php

use yii\helpers\Html;
use common\models\Brand;

/* @var $this yii\web\View */
/* @var $model app\models\Brand */

$this->title = 'Добавить бренд';
$this->params['breadcrumbs'][] = ['label' => 'Бренд', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-create">

    <h1><?= Html::encode($this->title) ?></h1>
<?php $model = new Brand();?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
