<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="https://fondosmil.com/fondo/9921.jpg">
<div class="cita-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcita',
            'codigo_postal',
            'nombre_completo',
            'direccion',
            'telefono',
            'fecha_de_consulta',
            'problema',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
</div>
