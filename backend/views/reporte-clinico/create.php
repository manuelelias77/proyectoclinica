<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReporteClinico */

$this->title = 'Create Reporte Clinico';
$this->params['breadcrumbs'][] = ['label' => 'Reporte Clinicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporte-clinico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
