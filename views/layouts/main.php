<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-touchevents">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta property="og:image" content="https://www.beboss.ru/img/beboss-sharing.jpg">
    <meta name="relap-image" content="https://www.beboss.ru/img/beboss-sharing.jpg">
    <meta itemprop="image" content="https://www.beboss.ru/img/beboss-sharing.jpg">
    <meta name="twitter:image:src" content="https://www.beboss.ru/img/beboss-sharing.jpg">
    <meta property="og:title" content="Каталог франшиз и франчайзинг предложений БИБОСС">
    <meta name="twitter:title" content="Каталог франшиз и франчайзинг предложений БИБОСС">
    <meta name="description" content="Каталог франшиз, магазин франчайзинга от БИБОСС. Все лучшие предложения по франшизам России и Украины и отзывы. Новые франшизы 2018 года уже на сайте, заходите и выбирайте из более чем 1000 предложений бизнеса по франшизе.">
    <meta property="og:description" content="Каталог франшиз, магазин франчайзинга от БИБОСС. Все лучшие предложения по франшизам России и Украины и отзывы. Новые франшизы 2018 года уже на сайте, заходите и выбирайте из более чем 1000 предложений бизнеса по франшизе.">
    <meta itemprop="description" content="Каталог франшиз, магазин франчайзинга от БИБОСС. Все лучшие предложения по франшизам России и Украины и отзывы. Новые франшизы 2018 года уже на сайте, заходите и выбирайте из более чем 1000 предложений бизнеса по франшизе.">
    <meta name="twitter:description" content="Каталог франшиз, магазин франчайзинга от БИБОСС. Все лучшие предложения по франшизам России и Украины и отзывы. Новые франшизы 2018 года уже на сайте, заходите и выбирайте из более чем 1000 предложений бизнеса по франшизе.">
    <meta name="keywords" content="Каталог франшиз, начать свой бизнес, франчайзинга магазин и предложения, купить франшизу, предложения франчайзинга">
    <meta name="apple-itunes-app" content="app-id=592724456">
    <meta property="og:site_name" content="beboss.ru">
    <meta itemprop="name" content="beboss.ru">
    <meta name="twitter:site" content="beboss.ru">
    <link href="/android-app-manifests/franchise.json" rel="manifest">
    <link href="https://www.beboss.ru/franchise" rel="canonical">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/favico/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favico/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favico/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favico/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favico/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="/favico/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="/favico/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favico/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favico/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favico/favicon-16x16.png" sizes="16x16">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <link href="/css/style-top.css" rel="stylesheet">
    <link href="/css/style-bottom.css" rel="stylesheet">
</head>

<body class="new-boss js-new-menu new-menu__close">
<?php $this->beginBody() ?>
<div class="beboss-head js-head-beboss">
    <div class="beboss-head__left">
        <a href="https://www.beboss.ru" class="beboss-head__logo-container">
            <div class="beboss-head__logo-icon"><i class="icon-logo-3"></i></div>
            <div class="beboss-head__logo-text">БИБОСС</div>
        </a>
	</div>
</div>
<div class="beboss-menu__separator"></div>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>