<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\CitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcita') ?>

    <?= $form->field($model, 'codigo_postal') ?>

    <?= $form->field($model, 'nombre_completo') ?>

    <?= $form->field($model, 'direccion') ?>

    <?= $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'fecha_de_consulta') ?>

    <?php // echo $form->field($model, 'problema') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
