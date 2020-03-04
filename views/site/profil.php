<?php


$this->title = 'Profil';
?>
<link rel="stylesheet" href="style/css/global.css">
<link rel="stylesheet" href="style/css/home/myProfile.css">
<link rel="stylesheet" href="style/css/cross-platform.css">
<link rel="stylesheet" href="style/css/nightMode.css">

<header>
    <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/index']);?>">
        <img class="black" src="style/images/svg/back-arrow.svg" alt="">
        <img class="white" src="style/images/svg/back-arrow-white.svg" alt="">
    </a>
    <span class="uppercase-bold-1">Профиль</span>
    <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/outlogin']);?>">
        <img class="black" src="style/images/svg/exit.svg" alt="">
        <img class="white" src="style/images/svg/exit-white.svg" alt="">
    </a>
</header>
<article>
    <!-- Version of site intended for PC -->
    <section id="pc-version">
        <div id="plug"><img src="style/images/svg/plug.svg" alt=""></div>
    </section>
    <!-- Version of site intended for Phones -->
    <section id="phone-version">
        <div id="pageInfo">
            <div id="accountPhoto"><img class="black" src="style/images/svg/users-photo.svg" alt=""><img class="white" src="style/images/svg/users-photo-white.svg" alt=""></div>
            <div id="accountName" class="bold-2"><?=$_SESSION['user']['first_name']?> <?=$_SESSION['user']['last_name']?></div>
            <div id="accountLink" class="regular-2">vk.com/id<?=$_SESSION['user']['vkid']?></div>
        </div>
        <div id="friendsInGame">
            <div id="titleFriendsInGame" class="bold-2">Друзья в игре</div>
            <div id="listOfFriends">
                <div class="slot">
                    <div class="partOfList">
                        <div class="photoAndIndiator">
                            <div class="friendsPhoto">
                                <img class="black" src="style/images/svg/users-photo.svg" alt="">
                                <img class="white" src="style/images/svg/users-photo-white.svg" alt="">
                            </div>
                            <div class="connectionIndicator"></div>
                        </div>
                        <div class="nameOfFriend regular-1">Антон Анучин</div>
                    </div>
                    <div class="horizontalLine"></div>
                    <div class="partOfList">
                        <div class="photoAndIndiator">
                            <div class="friendsPhoto">
                                <img class="black" src="style/images/svg/users-photo.svg" alt="">
                                <img class="white" src="style/images/svg/users-photo-white.svg" alt="">
                            </div>
                            <div class="connectionIndicator"></div>
                        </div>
                        <div class="nameOfFriend regular-1">Лиза Горячева</div>
                    </div>
                    <div class="horizontalLine"></div>
                    <div class="partOfList">
                        <div class="photoAndIndiator">
                            <div class="friendsPhoto">
                                <img class="black" src="style/images/svg/users-photo.svg" alt="">
                                <img class="white" src="style/images/svg/users-photo-white.svg" alt="">
                            </div>
                            <div class="connectionIndicator"></div>
                        </div>
                        <div class="nameOfFriend regular-1">Виталий Архипов</div>
                    </div>
                </div>
                <div clas="slot">
                    <div class="partOfList">
                        <div class="photoAndIndiator">
                            <div class="friendsPhoto">
                                <img class="black" src="style/images/svg/users-photo.svg" alt="">
                                <img class="white" src="style/images/svg/users-photo-white.svg" alt="">
                            </div>
                            <div class="connectionIndicator"></div>
                        </div>
                        <div class="nameOfFriend regular-1">Виталий Архипов</div>
                    </div>
                    <div class="horizontalLine"></div>
                    <div class="partOfList">
                        <div class="photoAndIndiator">
                            <div class="friendsPhoto">
                                <img class="black" src="style/images/svg/users-photo.svg" alt="">
                                <img class="white" src="style/images/svg/users-photo-white.svg" alt="">
                            </div>
                            <div class="connectionIndicator"></div>
                        </div>
                        <div class="nameOfFriend regular-1">Виталий Архипов</div>
                    </div>
                    <div class="horizontalLine"></div>
                    <div class="partOfList">
                        <div class="photoAndIndiator">
                            <div class="friendsPhoto">
                                <img class="black" src="style/images/svg/users-photo.svg" alt="">
                                <img class="white" src="style/images/svg/users-photo-white.svg" alt="">
                            </div>
                            <div class="connectionIndicator"></div>
                        </div>
                        <div class="nameOfFriend regular-1">Виталий Архипов</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="statistics">
            <div id="titleStatistics">Статистика</div>
            <div id="statisticsList">
                <div class="row">
                    <div class="statisticsBlock">
                        <div class="regular-1">Место в топе</div>
                        <div class="stat regular-1 light-grey">35999</div>
                    </div>
                    <div class="verticalLine"></div>
                    <div class="statisticsBlock">
                        <div class="regular-1">Выиграно игр</div>
                        <div class="stat regular-1 light-grey">205</div>
                    </div>
                </div>
                <div class="horizontalLine"></div>
                <div class="row">
                    <div class="statisticsBlock">
                        <div class="regular-1">Выиграно коинов</div>
                        <div class="numOfCoins stat">
                            <span class="regular-1 light-grey">10000000</span>
                            <img class="black" src="style/images/svg/coins.svg" alt="">
                            <img class="white" src="style/images/svg/coins-white.svg" alt="">
                        </div>
                    </div>
                    <div class="verticalLine"></div>
                    <div class="statisticsBlock">
                        <div class="regular-1">Друзья</div>
                        <div class="stat regular-1 light-grey">133</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>

<?php $ft="index"; include "footer.php";?>