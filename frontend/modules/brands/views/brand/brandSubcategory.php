<?php
/*
 * $model common\models\Bus
 * $category common\models\Categories
 * @var $subcategory name of Subcategory
 * */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Сategory';

$this->params['breadcrumbs'][] = [
        'label' => $category->category,
        'url' => ['/categories/category/category-page', 'id' => $category->id],
];
$this->params['breadcrumbs'][] = $subcategory->sub_category;

//$this->params['breadcrumbs'][] = $model->getSubCategory($subcategory_id);

?>
<main>

    <section class="sidebar_and_catalogue">
        <div class="wrapper">
            <aside class="sidebar">

                <?php foreach ($category->getSubCategoriesList() as $subCategory): ?>

                    <div class="categories_catalogue">
                        <div class="category_visible">

                            <div class="ctv_title"><?= $subCategory->sub_category ?></div>

                            <div class="ctv_count"><?= $subCategory->getCountSubcategoryItems() ?></div>
                        </div>
                        <div class="category_change">
                            <?php foreach ($subCategory->getSubcategoriesBrandSorted() as $brand): ?>
                                <div class="category_value">
                                    <input class='checkbox_value' checked="checked" type="checkbox" id="value1">
                                    <label for="value1"><?= Html::a(Html::encode($brand->getBrand()->brand_name), Url::to(['/brands/brand/brand-sorted', 'category_id' => $brand->category_id, 'brand_id' => $brand->brand_id, 'subcategory_id' => $brand->subcategory_id])) ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="category_littre">
                    <div class="category_visible">
                        <div class="ctv_title">Фильтр по литражу</div>
                        <div class="ctv_close"><img src="/img/close-filter.png" alt=""></div>
                    </div>
                    <div class="category_change">
                        <div class="category_value">
                            <input class='checkbox_value' checked="checked" type="checkbox" id="littre1">
                            <label for="littre1">Литражность 1 (23)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="littre2">
                            <label for="littre2">Литражность 2 (54)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="littre3">
                            <label for="littre3">Литражность 3 (12)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="littre4">
                            <label for="littre4">Литражность 4 (5)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="littre5">
                            <label for="littre5">Литражность 5 (78)</label>
                        </div>
                    </div>
                </div>
                <div class="category_power">
                    <div class="category_visible">
                        <div class="ctv_title">Фильтр по двигателю</div>
                        <div class="ctv_close"><img src="/img/close-filter.png" alt=""></div>
                    </div>
                    <div class="category_change">
                        <div class="category_value">
                            <input class='checkbox_value' checked="checked" type="checkbox" id="power1">
                            <label for="power1">До 150 кВт (23)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="power2">
                            <label for="power2">До 550 кВт (13)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="power3">
                            <label for="power3">До 450 кВт (27)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="power4">
                            <label for="power4">До 350 кВт (56)</label>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="main_with_sidebar">
                <div class="brand_fliter">
                    <div class="main_brand_button">
                        <div class="brand_button_text">Фильтр по брендам</div>
                        <div class="brand_button_close"><img src="/img/close-filter.png" alt=""></div>
                    </div>
                    <div class="brand_filter_name">
                        <div class="brand_list brand_gaz">
                            <input type="checkbox" name=''>
                        </div>
                        <div class="brand_list brand_belarus">
                            <input type="checkbox" name=''>
                        </div>
                        <div class="brand_list brand_maz">
                            <input type="checkbox" name=''>
                        </div>
                        <div class="brand_list brand_uaz">
                            <input type="checkbox" name=''>
                        </div>
                        <div class="brand_list brand_paz">
                            <input type="checkbox" name=''>
                        </div>
                    </div>
                </div>
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
            </div>

        </div>
    </section>
</main>



