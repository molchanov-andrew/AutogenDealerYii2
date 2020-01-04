<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Brand;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brand_id')->dropDownList(ArrayHelper::map(Brand::find()->select(['id', 'brand_name'])->all(), 'id', 'brand_name'), ['prompt' => 'Выберите брэнд']) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_alter')->textInput(['maxlength' => true]) ?>
    <?php if (!empty($model->category_picture)) {
        echo Html::img('/uploads/'.$model->category_picture, $options = ['class' => 'postImg', 'style' => ['width' => '50px']]);
    }
    ?>
    <?= $form->field($model, 'categoryPicture')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
