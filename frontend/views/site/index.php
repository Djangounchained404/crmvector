<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;

$this->title = 'TestJob CRM-vector';
?>

<div class="site-index">

        <div class="text-center">
            <h2 class="display-4">Расчет стоимости доставки!</h2>
        </div>

    <div class="all_cargo row">
        <div class="departure_cargo row text-center">
            <div class=" col-6">
            <label ><h4>Выберете город отправления груза: </h4> </label>
            </div>
            <div class=" col-6 select_departure">
            <select name="departure" id="departure" class="departure">
                <option value="Новосибирск" selected="selected">Новосибирск</option>
                <option value="Москва" >Москва</option>
                <option value="Владивосток">Владивосток</option>
            </select>
            </div>
        </div>
        <div class="arrival_cargo  row text-center">
            <div class=" col-6">
            <label><h4>Выберете город прибытия груза: </h4></label>
            </div>
            <div class=" col-6 select_arrival">
            <select name="arrival" id="arrival" class="arrival">
                <option value="Москва" selected="selected">Москва</option>
                <option value="Владивосток" selected="selected">Владивосток</option>
            </select>
            </div>
        </div>
        <div class="weight_cargo row text-center">
            <div class=" col-6 ">
                <label><h4>Укажите вес груза (кг) :</h4></label>
            </div>
            <div class=" col-6  select_weight">
                <input class="input-range" id="weight" name="weight" value="1" type="number" data-min="1" data-max="15000">
            </div>
            </div>
    </div>

            <div class="btn_calc col-12">
                <button  class="btn  btn-success " id="btn">Произвести расчет</button>
            </div>
</div>


<div class="col-12 result_main">
    <div class="result_calculate" id="result_calculate">

    </div>
</div>






