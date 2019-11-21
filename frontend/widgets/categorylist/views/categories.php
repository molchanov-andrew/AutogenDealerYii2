<?php
/* @$categoryList app\modules\categories\models\Categories;
 */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php /** @var app\modules\categories\models\Categories $categoryList */
foreach ($categoryList as $category): ?>
    <div class="menu_item">
        <span><?= Html::encode($category['category']); ?></span>
        <!--        ['href' => Url::to(["/categories/category/category-page",'id'=>$category['id']]-->
        <div class="hide_show">
<!--            --><?php //foreach ($category as $subcategory): ?>
                <a href="#">Подкатегоря 1</a>
                <a href="#">Подкатегоря 2</a>
                <a href="#">Подкатегоря 3</a>
                <a href="#">Подкатегоря 4</a>
                <a href="#">Подкатегоря 5</a>
<!--            --><?php //endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>