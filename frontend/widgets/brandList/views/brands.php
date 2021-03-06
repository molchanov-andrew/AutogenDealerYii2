<?php
/*
 * $categoryId var
 * $brandList common\models\Brand
 */

use yii\helpers\Html;

?>

<div class="brand_filter_name">

    <?php foreach ($brandList as $brand): ?>
        <div class="brand_list">
            <?= Html::a(Html::img($brand->getImage(), ['alt' => 'picture']), ['/brands/brand/brand-products', 'brandId' => $brand->id, 'categoryId'=>$categoryId], ['class' => 'selected_ajax']) ?>
        </div>
    <?php endforeach; ?>

</div>