<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pagos */

$this->title = 'Update Pagos: ' . $model->idpagos;
$this->params['breadcrumbs'][] = ['label' => 'Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpagos, 'url' => ['view', 'id' => $model->idpagos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pagos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
