<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\Session;

class SiteController extends Controller
{


//    function __construct() {
//
//
//
//
//    }


    public function actions()
    {
//        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $session = new Session;
        $session->open();
        if(!isset($session['user'])) return $this->render('login');
        return $this->render('index');
    }
/*
    if(!isset($_COOKIE['user'])) return $this->render('games');
    return $this->render('login');
*/
    public function actionGames()
    {
        $session = new Session;
        $session->open();
        if(!isset($session['user'])) return $this->render('login');
        return $this->render('games');
    }

    public function actionSettings(){

        $session = new Session;
        $session->open();
        if(!isset($session['user'])) return $this->render('login');
        return $this->render('settings');

    }

    public function actionMiner()
    {
        $session = new Session;
        $session->open();
        if(!isset($session['user'])) return $this->render('login');
        return $this->render('miner');
    }


    public function actionTopchar()
    {
        $session = new Session;
        $session->open();
        if(!isset($session['user'])) return $this->render('login');
        return $this->render('topchar');
    }

    public function actionProfil()
    {
        $session = new Session;
        $session->open();
        if(!isset($session['user'])) return $this->render('login');
        return $this->render('profil');
    }


    public function actionAboutus()
    {

        return $this->render('aboutus');
    }


    public function actionOutlogin()
    {
        $session = new Session;
        $session->open();
        unset($session['user']);

        return $this->redirect(['site/index']);
    }

    public function actionVk()
    {

        if(isset($session['user']['vkid']))
            return $this->redirect(['site/index']);

        if(!isset($_GET['code'])){
            exit('error code');
        }
      


        $token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id='.VKAPPID.'&redirect_uri='.VKAPPURL.'&scope=friends&client_secret='.VKAPPSECRET.'&code='.$_GET['code']),true);

        if(!$token){
            exit('error token');
        }

        $data = json_decode(file_get_contents('https://api.vk.com/method/users.get?v=5.52&user_id='.$token['user_id'].'&access_token='.$token['access_token'].'&fields=uid,first_name,last_name,photo_big'),true);

        if(!$data){
            exit('error data');
        }
        $session = new Session;
        $session->open();

        $data =$data['response']['0'];

        $session['user']=[
            'vkid'=>$data['id'],
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'photo_big'=>$data['photo_big'],


        ];





        return $this->redirect(['site/index']);



        return "test";
//        return $this->render('aboutus');
    }


}
