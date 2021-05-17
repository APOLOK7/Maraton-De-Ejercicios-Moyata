<?php
use yii\helpers\Html;
?>

<p>Ejercicios...</p>

<ul>
    <li><label>Numero Ingresado</label>: <?= Html::encode($model->num) ?></li>
    <li><label>N! : </label> <?= Html::encode($factorial)?></li>
    <li><label>Suma y Resta: </label> <?= Html::encode($resulsum)?></li>

</ul>