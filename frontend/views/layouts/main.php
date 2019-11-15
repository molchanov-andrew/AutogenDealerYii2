<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use frontend\widgets\categorylist\CategoryList;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="desktop_header">
    <div class="top_header">
        <div class="wrapper">
            <div class="logo_header"><a href="<?= Url::to(['/site/index'])?>"><img src="/img/logo.svg" alt="logo"></a></div>
            <div class="header_info">
                <div class="mail_info"><a href="mailto:avtogen@gmail.com">avtogen@gmail.com</a></div>
                <div class="phone_number">+380 95 456 84 12</div>
                <div class="time_work">Пн-Пт 9:00-19:00</div>
            </div>
            <div class="site_search"><input type="text" placeholder="Поиск по сайту"></div>
            <div class="language_change">
                <div class="change_lan_ua change_lan">UA</div>
                <div class="change_lan_ru change_lan active">RU</div>
            </div>
        </div>
    </div>
    <div class="bot_header">
        <div class="wrapper">
            <div class="menu_wrapper">
                <?= CategoryList::widget();?>
            </div>
        </div>
    </div>
</header>
<header class="mob_header">
    <div class="wrapper">
        <div class="top_line_header">
            <div class="menu_mob_active">
                <img src="/img/close_mob.png" alt="">
            </div>
            <div class="hamburger_menu">
                <img src="/img/hamburger.png" alt="hamburger">
            </div>
            <div class="logo_mobile"><a href="/"><img src="/img/logo.svg" alt="logo"></a></div>
            <div class="search_site"><img src="/img/search_mob.png" alt=""></div>
        </div>
        <div class="bottom_line_header">
            <div class="number_and_lang">
                <div class="phone_number"><a href="tel:+380954568412">+380 95 456 84 12</a></div>
                <div class="language_change">
                    <div class="change_lan_ua change_lan">UA</div>
                    <div class="change_lan_ru change_lan active">RU</div>
                </div>
            </div>
            <div class="menu_mob">
                <div class="menu_mob_item">
                    <a href="#">Автобусы</a>
                </div>
                <div class="menu_mob_item">
                    <a href="#">Сельхозтехника</a>
                </div>
                <div class="menu_mob_item">
                    <a href="#">Навесное оборудование</a>
                </div>
                <div class="menu_mob_item">
                    <a href="#">Строительная техника</a>
                </div>
                <div class="menu_mob_item">
                    <a href="#">Грузовые автомобили</a>
                </div>
                <div class="menu_mob_item">
                    <a href="#">Спецтехника</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="">
    <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>


<?php include_once $_SERVER["DOCUMENT_ROOT"] .'/sections/footer.php'; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
