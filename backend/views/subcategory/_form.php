<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Categories;
use common\models\Brand;

/* @var $this yii\web\View */
/* @var $model common\models\SubCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map($categoryChose = Categories::find()->select(['id','category'])->asArray()->all(), 'id', 'category'), ['prompt'=>'Выберите категорию'])?>

    <?= $form->field($model, 'brand_id')->dropDownList(ArrayHelper::map(Brand::find()->select(['id', 'brand_name'])->all(), 'id', 'brand_name'), ['prompt' => 'Выберите брэнд']) ?>

    <?= $form->field($model, 'sub_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_category_alter')->textInput(['maxlength' => true]) ?>
    <?php if (!empty($model->sub_category_picture)) {
        echo Html::img('/'.$model->getImage(), $options = ['class' => 'postImg', 'style' => ['width' => '50px']]);
    }
    ?>
    <?= $form->field($model, 'subCategoryPicture')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
