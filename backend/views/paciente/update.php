<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Paciente */

$this->title = 'Update Paciente: ' . $model->idpaciente;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpaciente, 'url' => ['view', 'id' => $model->idpaciente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paciente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
