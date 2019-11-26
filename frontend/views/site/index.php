<?php

/* @var $this yii\web\View
 * @model_brand app\models\Brand
 */
$this->title = 'AutoGen';

use yii\helpers\Html;
use yii\helpers\Url;
use app\modules\categories\models\Categories;

?>

<main>
    <section class="main_banner">
        <a href="#">
            <div class="text_block_banner">Спецтехника</div>
        </a>
    </section>
    <section class="brands">
        <div class="wrapper">
            <div class="brands_wrapper">
                <?php /** @var app\models\Brand $model_brand */
                /** @var app\models\Brand $brand */
                foreach ($model_brand as $brand): ?>
                <a href="">
                    <div class="brand"><?= Html::img($brand->getImage(), ['alt' => $brand['brand_name']]) ?></div>
                </a>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <section class="categories">
        <h1 class="title">Категории товаров</h1>
        <div class="wrapper">
            <div class="category_wrapper">

                <?php foreach (Categories::find()->all() as $category): ?>

                        <?= Html::beginTag('div',['class'=>'category'])?>
                        <div class="category_bg" <?='style="background-image: url('.Url::to($category->getImage()).')"'?>>
                            <div class="hide_nohover">
                                <a href="<?= Url::to(["/categories/category/category-page", 'id' => $category['id']])?>">В каталог</a>
                            </div>
                        </div>
                        <div class="category_title">
                            <div class="ct_title"><?= $category['category'] ?></div>
                            <div class="_ct_count"><?= $category->getSubCategoriesItemCount()?></div>
                        </div>
                        <?= Html::endTag('div')?>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="statistics">
        <h1 class="title">Наша статистика</h1>
        <div class="wrapper">
            <div class="stats_wrapper">
                <div class="stats_item">
                    <p class="stats_title">Широкий ассортимент</p>
                    <p class="stats_descr">16 522 000 товаров</p>
                </div>
                <div class="stats_item">
                    <p class="stats_title">Постоянные покупатели</p>
                    <p class="stats_descr">Более 10 000 довольных клиентов</p>
                </div>
                <div class="stats_item">
                    <p class="stats_title">Опыт в e-commerce</p>
                    <p class="stats_descr">5 лет на рынке интернет услуг</p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php /*foreach ($model_brand->getBrands() as $item): ?>
                <div class="brand"><?= Html::encode($item->brand_name); ?></div>
            <?php endforeach; */
?>


