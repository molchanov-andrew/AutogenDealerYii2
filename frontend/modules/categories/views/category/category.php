<?php

use yii\helpers\Html;

/*
@var $category common\models\Categories
*/

$this->title = 'Сategory';

/** @var $category common\models\Categories
 * @var $subCategoryByBrand common\models\SubCategory
 * @var $subCategory common\models\SubCategory
 */
$this->params['breadcrumbs'][] = $category->category;

?>
<main>
    <section class="sidebar_and_catalogue">
        <div class="wrapper">
            <aside class="sidebar">

                <?php foreach ($category->getSubCategoriesList() as $subCategory): ?>

                    <div class="categories_catalogue">
                        <div class="category_visible">

                            <div class="ctv_title"><?= $subCategory->sub_category ?></div>
                            <div class="ctv_count"><?= $subCategory->getCountSubcategory() ?></div>
                        </div>
                        <div class="category_change">
                            <?php foreach ($subCategory->getSubcategoriesBrandSorted() as $subCategoryByBrand): ?>
                                <!--                            <div class="category_value">-->
                                <!--                                <input class='checkbox_value' checked="checked" type="checkbox" id="value1">-->
                                <!--                                <label for="value1">--><!--</label>-->
                                <!--                            </div>-->
                                <div class="category_value">
                                    <?= Html::a($subCategoryByBrand->getSubCategoryBrandName()->brand_name, ['/categories/subcategories/brand-choice', 'brand_id' => $subCategoryByBrand->getSubCategoryBrandName()->id, 'category_id' => $category->id]) ?>
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
                    <?php foreach ($category->getSubCategoriesList() as $subCategory): ?>
                        <div class="catalogue_item">
                            <div class="ct_image"><?= Html::img($subCategory->getImage(), ['alt' => 'img']) ?></div>
                            <div class="catalogue_descr">
                                <p><?= Html::encode($subCategory->sub_category) ?></p>
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

