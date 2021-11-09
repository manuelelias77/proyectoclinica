<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReporteClinico */

$this->title = $model->idreporte_clinico;
$this->params['breadcrumbs'][] = ['label' => 'Reporte Clinicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporte-clinico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idreporte_clinico], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idreporte_clinico], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idreporte_clinico',
            'codigo_postal',
            'numero_historial',
            'pieza_tratada',
            'fecha_tratamiento',
            'piezas_a_tratar',
        ],
    ]) ?>

</div>
