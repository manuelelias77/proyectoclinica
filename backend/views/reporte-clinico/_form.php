<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReporteClinico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporte-clinico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idreporte_clinico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_historial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pieza_tratada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_tratamiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'piezas_a_tratar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
