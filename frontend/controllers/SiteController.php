<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\components\Common;

use common\models\Cargo;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionIndex(){
        if (Yii::$app->request->isAjax) {
            sleep(2);
            $location= $_POST['departure'].'-'.$_POST['arrival'];
            $model = Cargo::find()->where(['location' => $location])->one();
            $price= Common::calcPrice($_POST['weight'], $model['zone']);
            $zone =$model["zone"];
            return '<div class="calcres"><h5>Стоимость доставки будет :'.' '.$price.'руб.<br> Зона доставки:'.' '.$zone.'</h5></div>' ;
        }
        return $this->render('index');
    }
    
    public function actionSity()
    {
        if ($_GET["departure"]== 'Москва') {
            echo json_encode(array(
                "Новосибирск"=>"Новосибирск",
                "Владивосток"=>"Владивосток",
            ));
        }
        else if ($_GET["departure"]== 'Новосибирск'){
            echo json_encode(array(
                "Москва"=>"Москва",
                "Владивосток"=>"Владивосток",
            ));
        }
        else if ($_GET["departure"]== 'Владивосток'){
            echo json_encode(array(
                "Москва"=>"Москва",
                "Новосибирск"=>"Новосибирск",
            ));
        }
    }

    }
