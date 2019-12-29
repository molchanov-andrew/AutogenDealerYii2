<?php
/*
 * $model common\models\Bus
 * $category common\models\Categories
 * @var $subcategory name of Subcategory
 * */

use yii\helpers\Html;
use yii\helpers\Url;
?>
                <div class="main_catalogue">

                    <?php foreach ($model as $item): ?>

                        <div class="catalogue_item">
                            <div class="ct_image"><?= Html::img($item->getImage(), ['alt' => 'img']) ?></div>
                            <div class="catalogue_descr">
                                <p><?= Html::encode($item->getSubCategory()->sub_category) ?></p>
                                <p>от 10 000 грн</p>
                            </div>
                            <div class="catalogue_button"><a href="#">Детальнее</a></div>
                        </div>
                    <?php endforeach; ?>
                </div>




