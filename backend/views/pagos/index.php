<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PagosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="https://fondosmil.com/fondo/9921.jpg">
<div class="pagos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pagos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpagos',
            'nombre_deudor',
            'direccion',
            'telefono',
            'fecha_de_consulta',
            'cantidad_adeudada',
            'tratamiento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
