<?php

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