<?php


$this->title = 'index';



global $vkcoin;
$vkcoin = new VKCoinClient(MYID, KEY);

$Balance = (($vkcoin->getBalance([$_SESSION['user']['vkid']]))['response'])[$_SESSION['user']['vkid']];

$Balance = $Balance/1000;

$result = $vkcoin->getTransactions(2);
//print_r(($result['response']));




?>
<link rel="stylesheet" href="style/css/global.css">
<link rel="stylesheet" href="style/css/games/gamesPage.css">
<link rel="stylesheet" href="style/css/cross-platform.css">
<link rel="stylesheet" href="style/css/nightMode.css">

    <header>
        <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/profil']);?>">
            <img class="black" src="style/images/svg/user.svg" alt="">
            <img class="white" src="style/images/svg/user-white.svg" alt="">
        </a>
        <span class="uppercase-bold-1"><?=$_SESSION['user']['first_name']?></span>
        <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/settings']);?>">
            <img class="black" src="style/images/svg/settings.svg" alt="">
            <img class="white" src="style/images/svg/settings-white.svg" alt="">
        </a>
    </header>
<article>
    <!--     Version of site intended for PC -->
    <section id="pc-version">
        <div id="plug"><img src="style/images/svg/plug.svg" alt=""></div>
    </section>
    <!-- Version of site intended for Phones -->
    <section id="phone-version">
        <div id="account">
            <div class="uppercase-bold-2 light-grey">ВАШ СЧЕТ</div>
            <div id="numberOfCoins" class="bold-1"><?=$Balance?></div>
            <img class="black" src="style/images/svg/coins.svg" alt="">
            <img class="white" src="style/images/svg/coins-white.svg" alt="">
        </div>
        <div id="menu">
            <div id="buy" class="block">
                <a href="getCoins.html">
                    <div class="menuBlock"><img src="style/images/svg/purchase.svg" alt=""></div>
                </a>
                <span class="bold-4 grey">Покупка</span>
            </div>
            <div id="sell" class="block">
                <a href="sellCoins.html">
                    <div class="menuBlock"><img src="style/images/svg/sell.svg" alt=""></div>
                </a>
                <span class="bold-4 grey">Продажа</span>
            </div>
            <div id="change" class="block">
                <a href="transferCoins.html">
                    <div class="menuBlock"><img src="style/images/svg/change.svg" alt=""></div>
                </a>
                <span class="bold-4 grey">Перевод</span>
            </div>
            <div id="shop" class="block">
                <a href="shop.html">
                    <div class="menuBlock"><img src="style/images/svg/shop.svg" alt=""></div>
                </a>
                <span class="bold-4 grey">Магазин</span>
            </div>
        </div>
        <div id="stories">
            <span id="storiesTitle" class="uppercase-bold-2 light-grey">История транзакций</span>
            <div id="listOfTransactions">

                <?php if ($result['response'] == null) {?>
                    <div id="emptyStories">
                        <span class="regular-1 light-grey">На данный момент ваша история пуста</span>
                    </div>
                <?php }else {
                    $i=0;
                }
                foreach ($result['response'] as $item){
                    $i++;
                    if($i<10){
                        if(MYID == $item['from_id']) {
                            ?>
                            <div id="refill" class="operation">
                                <img src="style/images/svg/get-coins.svg" alt="">
                                <div class="nameOfOperation">
                                    <div>
                                        <span class="regular-1">+<?=($item['amount'] / 1000)?></span>
                                        <img class="black" src="style/images/svg/coins.svg" alt="">
                                        <img class="white" src="style/images/svg/coins-white.svg" alt="">
                                    </div>
                                    <div class="stateOfAccount">
                                        <span class="regular-2">Состояние счета: <?php echo $Balance;$Balance= $Balance- ($item['amount'] / 1000);?></span>
                                        <img class="black" src="style/images/svg/coins.svg" alt="">
                                        <img class="white" src="style/images/svg/coins-white.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="horizontalLine"></div>
                            <?php

                        }?>
                        <div id="cancellation" class="operation">
                            <img src="style/images/svg/lose-coins.svg" alt="">
                            <div class="nameOfOperation">
                                <div>
                                    <span class="regular-1">-<?=($item['amount'] / 1000)?></span>
                                    <img class="black" src="style/images/svg/coins.svg" alt="">
                                    <img class="white" src="style/images/svg/coins-white.svg" alt="">
                                </div>
                                <div class="stateOfAccount">
                                    <span class="regular-2">Состояние счета: <?php echo $Balance;$Balance= $Balance+ ($item['amount'] / 1000);?></span>
                                    <img class="black" src="style/images/svg/coins.svg" alt="">
                                    <img class="white" src="style/images/svg/coins-white.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="horizontalLine"></div>
                        <?php
                    }}
                ?>
            </div>
        </div>
    </section>
</article>



<?php $ft="index"; include "footer.php";?>

<!-- Script running preloader -->
<script src="scripts/preloader.js"></script>
<!-- Script triggered by turning on "night mode" -->
<script src="scripts/nightMode.js"></script>