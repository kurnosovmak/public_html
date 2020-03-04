<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use app\models\LoginForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;

$this->title = 'Login';
?>
<link rel="stylesheet" href="style/css/global.css">
<link rel="stylesheet" href="style/css/other/aboutUs.css">
<article>
    <!-- Version of site intended for PC -->
    <section id="pc-version">
        <div id="plug"><img src="style/images/svg/plug.svg" alt=""></div>
    </section>
    <!-- Version of site intended for Phones -->
    <section id="phone-version">
        <div id="bg-gradient"><img src="style/images/png/bg.png" alt=""></div>
        <div id="content">
            <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/index']);?>"><img src="style/images/svg/back-arrow.svg" alt=""></a>
            <div id="text">
                <span class="bold-2">Quick Coins</span>
                <p class="regular-1">Многие и представить себе не могли, но это все же случилось! VK-coin стала виртуальной валютой. Нет, нет, это не значит, что вы можете расплатиться ей в ближайшей чебуречной, однако, она имеет множество других приемуществ, о которых мы расскажем вам далее.</p>
                <p class="regular-1">Так что же представляет из себя VK-coin? Назвав VK-coin валютой, мы ни чуть не преувеличиваем. Вы можете как продавать, так и покупать «коины» по курсу, предоставленному нашим сервисом «Quick Coins». Это значит, что, оперируя курсом, можно заработать реальные деньги. Но это еще не все. В нашем сервисе вы можете играть на «коины», майнить их же, пересылать их друзьям, отслеживать состояние своего счета «коинов» и совершать покупки в нашем магазине. Но давайте не будем спешить и разберем все подробнее…</p>
                <span class="bold-3">Игры на «коины»</span>
                <p class="regular-1">Игры на VK-coin можно по праву назвать «жемчужиной» сервиса «Quick Coins», и сейчас мы вам это докажем.</p>
                <p class="regular-1">Тщательно проработанные игры, цель которых преумножить ваши деньги, помогут вам выбиться в топ богатейших пользователей. Рулетка, покер, двадцать одно, хозяева-гости — это лишь малая часть тех игр, которые помогут вам в этом. Со временем этот список будет пополняться и другими не менее интересными играми.</p>
                <span class="bold-3">Майнинг «коинов»</span>
                <p class="regular-1">Несмотря на то, что VK-coin стал оцениваться в рублях, вы все еще можете насладиться халявой, ведь только в нашем сервисе присутствует возможность майнить. Вкладывайтесь в горняков, и пусть они добывают вам руду, которую можно переработать в «коины».</p>
                <span class="bold-3">Отслеживайте состояние вашего счета</span>
                <p class="regular-1">Хотите узнать, куда пропали все ваши «коины»? Не надо гадать, просто загляните в историю транзакций. Здесь отображаются все ваши пополнения счета и списания. Так, вы всегда будете в курсе, что происходит с вашим счетом.</p>
                <span class="bold-3">Совершайте покупки в нашем магазине</span>
                <p class="regular-1">Небольшим дополнением ко всему прочему послужит магазин, товары в котором продаются исключительно за VK-coin.</p>
                <p class="regular-1">Мы можем бесконечно долго рассказывать о «Quick Coins», но есть ли смысл, когда вы можете увидеть все сами.</p>
                <p class="regular-1">Так чего же вы ждете...</p>
            </div>
        </div>
    </section>
</article>