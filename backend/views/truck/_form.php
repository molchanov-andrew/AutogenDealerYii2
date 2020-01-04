<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Brand;
use common\models\Categories;
use common\models\SubCategory;

/* @var $this yii\web\View */
/* @var $model common\models\Truck */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="truck-form">

    <?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->textarea()?>
    <?= $form->field($model, 'brand_id')->dropDownList(ArrayHelper::map(Brand::find()->select(['id', 'brand_name'])->all(), 'id', 'brand_name'), ['prompt' => 'Выберите брэнд']) ?>
    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Categories::find()->select(['id','category'])->asArray()->all(), 'id', 'category'), ['prompt'=>'Выберите категорию'])?>
    <?= $form->field($model, 'subcategory_id')->dropDownList(ArrayHelper::map(SubCategory::find()->select(['id', 'sub_category'])->asArray()->all(), 'id', 'sub_category'), ['prompt'=>'Выберите подкатегорию']) ?>
    <?= $form->field($model, 'price')->textInput(['type'=>'number'])?>
    <?php if (!empty($model->picture)) {
        echo Html::img('/'.$model->getImage(), $options = ['class' => 'postImg', 'style' => ['width' => '50px']]);
    }
    ?>
    <?= $form->field($model, 'mainTruckImage')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
