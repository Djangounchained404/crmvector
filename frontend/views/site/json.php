<?php

use frontend\components\Common;

header('Content-type:json/application');
$arr = Common::makeJason();
var_dump($arr);

