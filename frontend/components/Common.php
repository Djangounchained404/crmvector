<?php

namespace frontend\components;


use Yii;
use yii\base\Component;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;
use yii\db\Connection;

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


}