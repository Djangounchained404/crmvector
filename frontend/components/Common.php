<?php

namespace frontend\components;


use Yii;
use yii\base\Component;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;
use yii\db\Connection;
use common\models\Cargo;


class Common extends Component
{

public static function calcPrice ($weight, $zone) {
    $calcZone = [
      1 =>500,
      2=>750,
      3=>1000
    ];
    if ($weight > 3) {
        $price = $calcZone[$zone] + (($weight-3)*70);
        return $price;
    }
    else {
        $price = $calcZone[$zone];
        return $price;
    }
}

public static function makeJason () {
    $models = Cargo::find()->asArray()->all();
    $obj = json_encode($models,JSON_UNESCAPED_UNICODE);
    return $obj;
}

public static function showCalc ($location ,$weight) {

    $arr = Common::makeJason();
    $arr2 = json_decode($arr, true);
    for ($i=0; $i<count($arr2);$i++) {
        if ($arr2[$i]["location"]==$location){
            $zone =$arr2[$i]['zone'];
            $price= Common::calcPrice($weight, $zone);
            return '<div class="calcres"><h5>Стоимость доставки будет :'.' '.$price.'руб.<br> Зона доставки:'.' '.$zone.'</h5></div>' ;
        }
    }


}


}