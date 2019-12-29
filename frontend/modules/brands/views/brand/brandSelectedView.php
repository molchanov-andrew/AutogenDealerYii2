<?php

/*$subcategoryBrandProducts common\models\SubCategory*/

use yii\helpers\Html;
?>
<div class="main_catalogue">
    <?php foreach ($subcategoryBrandProducts as $subcategoryBrandProduct): ?>
        <div class="catalogue_item">
            <div class="ct_image"><?= Html::img($subcategoryBrandProduct->getImage(), ['alt' => 'img']) ?></div>
            <div class="catalogue_descr">
                <p><?= Html::encode($subcategoryBrandProduct->sub_category) ?></p>
                <p>от 10 000 грн</p>
            </div>
            <div class="catalogue_button"><a href="#">Детальнее</a></div>
        </div>
    <?php endforeach; ?>
</div>