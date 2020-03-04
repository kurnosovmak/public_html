<?php
//
//// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

require "../lib.php";
define("VKAPPID","6958163");
define("VKAPPSECRET","3qYLkj7tTqbkbA4biGFt");
define("VKAPPURL","http://quickcoins.ru/web/?r=site/vk");
define("API_VERSION", "5.95");
define("KEY", "Y6LUtA1VN9GNRLdJuVe*fu5Y1U4ZqlaOZ;]Pzb_lTKOJ8hL-sC");
define("MYID","297143596");
global $vkcoin;


$config = require __DIR__ . '/../config/web.php';



(new yii\web\Application($config))->run();
