<?php


$this->title = 'Miner';
?>
<link rel="stylesheet" href="style/css/global.css">
<!-- miningPage.css and cross-platform.css switched places
  because we need to place plug image in the center -->
<link rel="stylesheet" href="style/css/cross-platform.css">
<link rel="stylesheet" href="style/css/mining/miningPage.css">
<link rel="stylesheet" href="style/css/nightMode.css">

<header>
    <img src="style/images/png/placeholder.png" alt="">
    <span class="uppercase-bold-1">Майнинг</span>
    <img src="style/images/png/placeholder.png" alt="">
</header>
<article>
    <!-- Version of site intended for PC -->
    <section id="pc-version">
        <div id="plug"><img src="style/images/svg/plug.svg" alt=""></div>
    </section>
    <!-- Version of site intended for Phones -->
    <section id="phone-version">
        <div id="image">
            <img class="black" src="style/images/svg/coming-soon.svg" alt="">
            <img class="white" src="style/images/svg/coming-soon-white.svg" alt="">
        </div>
    </section>
</article>


<?php $ft="miner"; include "footer.php";?>