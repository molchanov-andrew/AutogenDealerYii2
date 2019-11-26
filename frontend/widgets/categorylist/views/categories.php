<?php
/* @$categoryList app\modules\categories\models\Categories;
 */

use yii\helpers\Html;

?>
<?php /** @var app\modules\categories\models\Categories $categoryList */
foreach ($categoryList as $category): ?>
    <div class="menu_item">
        <span><?= Html::encode($category->category); ?></span>
        <!--        ['href' => Url::to(["/categories/category/category-page",'id'=>$category['id']]-->
        <div class="hide_show">
            <?php foreach ($category->getSubCategoriesList() as $subcategory): ?>
                <a href="#"><?=Html::encode($subcategory['sub_category'])?></a>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>