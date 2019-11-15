<?php
/* @var $this yii\web\View
 *@$modelPicture  app\models\PictureForm\PictureForm
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
    <h1>picture/upload</h1>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'picture')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>