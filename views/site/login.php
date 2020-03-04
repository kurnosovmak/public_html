<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;



$this->title = 'Login';
?>
<link rel="icon" href="style/images/png/main-icon.png">
<!-- Theme styles -->
<link rel="stylesheet" href="style/css/global.css">
<link rel="stylesheet" href="style/css/other/index.css">
<article>
    <!-- Version of site intended for PC -->
    <section id="pc-version">
        <div id="plug"><img src="style/images/svg/plug.svg" alt=""></div>
    </section>
    <!-- Version of site intended for Phones -->
    <section id="phone-version">
        <div id="bg-gradient"><img src="style/images/png/bg.png" alt=""></div>
        <div id="name">
            <img src="style/images/svg/name-field.svg" alt="">
        </div>
        <div id="autorisationBlock">
            <div id="conf" class="regular-3">Авторизовавшись, вы подтверждаете условия пользовательского соглашения</div>
            <?php
            
            ?>
            <a href="https://oauth.vk.com/authorize?client_id=<?=VKAPPID?>&display=page&redirect_uri=<?=VKAPPURL?>&scope=friends&response_type=code"><button id="autorisationButton" class="hugeButton">Авторизоваться</button></a>
            <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/aboutus']);?>" class="regular-2">Подробнее о нас</a>
        </div>
    </section>
</article>
