<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MOperator */

$this->title = 'Update Operator: ' . $model->id_operator;
$this->params['breadcrumbs'][] = ['label' => 'Operators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_operator, 'url' => ['view', 'id' => $model->id_operator]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="moperator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
