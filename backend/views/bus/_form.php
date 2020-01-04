<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Brand;
use common\models\Categories;
use common\models\SubCategory;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Bus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brand_id')->dropDownList(ArrayHelper::map(Brand::find()->select(['id', 'brand_name'])->all(), 'id', 'brand_name'), ['prompt' => 'Выберите брэнд']) ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Categories::find()->select(['id','category'])->asArray()->all(), 'id', 'category'), ['prompt'=>'Выберите категорию'])?>

    <?= $form->field($model, 'subcategory_id')->dropDownList(ArrayHelper::map(SubCategory::find()->select(['id', 'sub_category'])->asArray()->all(), 'id', 'sub_category'), ['prompt'=>'Выберите подкатегорию']) ?>

    <?= $form->field($model, 'article')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'power')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transmission')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passengers_number')->textInput() ?>

    <?php if (!empty($model->busPicture)) {
        echo Html::img('/'.$model->getImage(), $options = ['class' => 'postImg', 'style' => ['width' => '50px']]);
    }
    ?>
    <?= $form->field($model, 'busPicture')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
