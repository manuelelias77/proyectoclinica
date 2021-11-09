<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ReporteClinicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reporte Clinicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="https://fondosmil.com/fondo/9921.jpg">
<div class="reporte-clinico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reporte Clinico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idreporte_clinico',
            'codigo_postal',
            'numero_historial',
            'pieza_tratada',
            'fecha_tratamiento',
            'piezas_a_tratar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
