<?php
use yii\helpers\Html;
/*
app\modules\categories\models\Categories $category
*/

$this->title = 'Subcategory';
/** @var string $category */
$this->params['breadcrumbs'][] = $category->category;
$count = 0;

?>
<main>
    <section class="sidebar_and_catalogue">
        <div class="wrapper">
            <aside class="sidebar">
                <?php foreach ($category->getSubcategories() as $subcategory):?>
                <div class="categories_catalogue <?= ($count==0) ? "categorie_active".'"' : "".'"'; $count++?>>
                    <div class="category_visible">
                        <div class="ctv_title"><?=$subcategory["sub_categories"]?></div>
                        <div class="ctv_count"><?= count($category->getSubcategories())?></div>
                    </div>
                    <div class="category_change">
                        <div class="category_value">
                            <input class='checkbox_value' checked="checked" type="checkbox" id="value1">
                            <label for="value1">Товар 1 (25)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="value2">
                            <label for="value2">Товар 2 (212)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="value3">
                            <label for="value3">Товар 3 (123)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="value4">
                            <label for="value4">Товар 4 (12)</label>
                        </div>
                        <div class="category_value">
                            <input class='checkbox_value' type="checkbox" id="value5">
                            <label for="value5">Товар 5 (12)</label>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>



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
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                    <div class="catalogue_item">
                        <div class="ct_image"><img src="/img/bus_catal.png" alt=""></div>
                        <div class="catalogue_descr">
                            <p>Товар 1</p>
                            <p>от 10 000 грн</p>
                        </div>
                        <div class="catalogue_button"><a href="#">Детальнее</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

