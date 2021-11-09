<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReporteClinico */

$this->title = 'Update Reporte Clinico: ' . $model->idreporte_clinico;
$this->params['breadcrumbs'][] = ['label' => 'Reporte Clinicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idreporte_clinico, 'url' => ['view', 'id' => $model->idreporte_clinico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reporte-clinico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
