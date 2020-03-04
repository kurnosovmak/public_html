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
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Main Icon -->
    <link rel="icon" href="style/images/png/main-icon.png">

    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Quick Coins <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Preloader -->
<div id="page-preloader" class="preloader">
    <div class='sk-three-bounce' id="loader">
        <div class='sk-bounce-1 sk-child'></div>
        <div class='sk-bounce-2 sk-child'></div>
        <div class='sk-bounce-3 sk-child'></div>
    </div>
</div>


        <?= $content ?>

<!-- Script running preloader -->
<script src="scripts/preloader.js"></script>
<!-- Script triggered by turning on "night mode" -->
<script src="scripts/nightMode.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
