<?php
/*
 * $brandList common\models\Brand
 */
use yii\helpers\Html;
?>
<div class="brand_filter_name">
    <?php foreach ($brandList as $brand): ?>
        <div class="brand_list">

            <?=Html::a(Html::img($brand->getImage(),['alt'=>'picture']), ['/brands/brand/brand-selected', 'brandId'=>$brand->id])?>
<!--            <input type="checkbox" name=''>-->
        </div>
    <?php endforeach; ?>
</div>