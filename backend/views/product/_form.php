<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Brand;
use common\models\Categories;
use common\models\SubCategory;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brand_id')->dropDownList(ArrayHelper::map(Brand::find()->select(['id', 'brand_name'])->all(), 'id', 'brand_name'), ['prompt' => 'Выберите брэнд']) ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Categories::find()->select(['id', 'category'])->all(),'id', 'category'), ['prompt' => 'Выберите категорию']) ?>

    <?= $form->field($model, 'subcategory_id')->dropDownList(ArrayHelper::map(SubCategory::find()->select(['id', 'sub_category'])->all(),'id', 'sub_category'), ['prompt' => 'Выберите подкатегорию']) ?>

    <?= $form->field($model, 'article')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
