<?php
/* @var $model app\modules\brands\models;*/
?>

<div class="brands-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <?php foreach ($model->getBrands() as $item):?>
        <?= $item->brand_name;?>
        <?= '<br>';?>
    <?php endforeach;?>

</div>
