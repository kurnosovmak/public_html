<?php


$this->title = 'games';
?>

<link rel="stylesheet" href="style/css/global.css">
    <link rel="stylesheet" href="style/css/games/gamesPage.css">
    <link rel="stylesheet" href="style/css/cross-platform.css">
    <link rel="stylesheet" href="style/css/nightMode.css">
<article>
    <header>
        <span class="uppercase-bold-1">Игры</span>
    </header>
      <!-- Version of site intended for PC -->
      <section id="pc-version">
        <div id="plug"><img src="style/images/svg/plug.svg" alt=""></div>
      </section>
      <!-- Version of site intended for Phones -->
      <section id="phone-version">
        <div id="menu">
          <div id="roulette" class="block">
            <a href="roulette-pvp.html">
              <div class="menuBlock"><img src="style/images/svg/roulette-pvp.svg" alt=""></div>
            </a>
            <span class="bold-4 grey">Рулетка PvP</span>
          </div>
          <div id="poker" class="block">
            <a href="poker.html">
              <div class="menuBlock"><img src="style/images/svg/poker.svg" alt=""></div>
            </a>
            <span class="bold-4 grey">Покер</span>
          </div>
          <div id="twenty-one" class="block">
            <a href="twenty-one.html">
              <div class="menuBlock"><img src="style/images/svg/twenty-one.svg" alt=""></div>
            </a>
            <span class="bold-4 grey">Двадцать Одно</span>
          </div>
          <div id="h-g" class="block">
            <a href="hosts-guests.html">
              <div class="menuBlock"><img src="style/images/svg/hosts-guests.svg" alt=""></div>
            </a>
            <span class="bold-4 grey">Хозяева-Гости</span>
          </div>
        </div>
      </section>
    </article>

<?php $ft="games"; include "footer.php";?>
