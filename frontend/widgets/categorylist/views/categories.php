<?php
/* @$categoryList app\modules\categories\models\Categories;

 */
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php /** @var app\modules\categories\models\Categories $categoryList */
foreach ($categoryList as $category): ?>
    <div class="menu_item">
        <span><?= Html::tag('a', Html::encode($category['category']), ['href' => Url::to(["/categories/category/subcategory-list",'id'=>$category['id'], 'category'=>$category['category'], 'category_alter'=>$category['category_alter']])]); ?></span>
        <div class="hide_show">
            <a href="#">Подкатегоря 1</a>
            <a href="#">Подкатегоря 2</a>
            <a href="#">Подкатегоря 3</a>
            <a href="#">Подкатегоря 4</a>
            <a href="#">Подкатегоря 5</a>
        </div>
    </div>
<?php endforeach; ?>