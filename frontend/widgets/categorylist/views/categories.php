<?php
/* @$categoryList app\modules\categories\models\Categories;
 */

use yii\helpers\Html;

?>
<?php
foreach ($categoryList as $category): ?>
    <div class="menu_item">
        <span><?= Html::encode($category->category); ?></span>
        <div class="hide_show">
            <?php foreach ($category->getSubCategoriesList() as $subcategory): ?>
            <?= Html::a(Html::encode($subcategory['sub_category']), ['/categories/subcategories/subcategory/', 'categoryId'=>$category->id,'subcategoryId'=>$subcategory->id])?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>