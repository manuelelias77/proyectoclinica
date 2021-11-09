<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\ReporteClinicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporte-clinico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idreporte_clinico') ?>

    <?= $form->field($model, 'codigo_postal') ?>

    <?= $form->field($model, 'numero_historial') ?>

    <?= $form->field($model, 'pieza_tratada') ?>

    <?= $form->field($model, 'fecha_tratamiento') ?>

    <?php // echo $form->field($model, 'piezas_a_tratar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
