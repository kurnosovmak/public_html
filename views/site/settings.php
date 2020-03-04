<?php


$this->title = 'Settings';
?>

<link rel="stylesheet" href="style/css/global.css">
<link rel="stylesheet" href="style/css/home/settings.css">
<link rel="stylesheet" href="style/css/cross-platform.css">
<link rel="stylesheet" href="style/css/nightMode.css">

<header>
    <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/index']);?>">
        <img class="black" src="style/images/svg/back-arrow.svg" alt="">
        <img class="white" src="style/images/svg/back-arrow-white.svg" alt="">
    </a>
    <span class="uppercase-bold-1">Настройки</span>
    <img src="style/images/png/placeholder.png" alt="">
</header>
<article>
    <!-- Version of site intended for PC -->
    <section id="pc-version">
        <div id="plug"><img src="style/images/svg/plug.svg" alt=""></div>
    </section>
    <!-- Version of site intended for Phones -->
    <section id="phone-version">
        <div id="settings">
            <div class="settings-block soundOff" id="soundsInGame">
                <div class="menuBlock">
                    <img src="style/images/svg/sound.svg" alt="" id="soundFImg">
                    <img src="style/images/svg/sound-selected.svg" alt="" id="soundSImg">
                </div>
                <span class="bold-4 grey">Звуки в игре</span>
            </div>
            <div class="settings-block nightOff" id="nightMode">
                <div class="menuBlock">
                    <img src="style/images/svg/moon.svg" alt="" id="nightFImg">
                    <img src="style/images/svg/moon-selected.svg" alt="" id="nightSImg">
                </div>
                <span class="bold-4 grey">Ночной режим</span>
            </div>
        </div>
        <div id="aboutUs">
            <div id="aboutUsHeader" class="bold-2">О приложении</div>
            <div id="aboutUsList">
                <a href="">
                    <div class="partOfList">
                        <span class="regular-1">Пользовательское соглашение</span>
                        <img class="black" src="style/images/svg/arrow-down.svg" alt="">
                        <img class="white" src="style/images/svg/arrow-down-white.svg" alt="">
                    </div>
                </a>
                <div class="horizontalLine"></div>
                <a href="">
                    <div class="partOfList">
                        <span class="regular-1">Политика конфидециальности</span>
                        <img class="black" src="style/images/svg/arrow-down.svg" alt="">
                        <img class="white" src="style/images/svg/arrow-down-white.svg" alt="">
                    </div>
                </a>
                <div class="horizontalLine"></div>
                <a href="mailto:support@quickcoins.ru">
                    <div class="partOfList">
                        <span class="regular-1">Написать разработчикам</span>
                        <img class="black" src="style/images/svg/arrow-down.svg" alt="">
                        <img class="white" src="style/images/svg/arrow-down-white.svg" alt="">
                    </div>
                </a>
                <div class="horizontalLine"></div>
                <a href="supportTheProject.html">
                    <div class="partOfList">
                        <span class="regular-1">Поддержать проект</span>
                        <img class="black" src="style/images/svg/arrow-down.svg" alt="">
                        <img class="white" src="style/images/svg/arrow-down-white.svg" alt="">
                    </div>
                </a>
                <div class="horizontalLine"></div>
            </div>
        </div>
        <div id="version">
            <span class="regular-2 light-grey">Версия 0.1</span>
        </div>
    </section>
</article>
<?php $ft="index"; include "footer.php";?>
<script src="scripts/settings.js"></script>
