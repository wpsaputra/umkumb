<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OperatorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moperator-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_operator') ?>

    <?= $form->field($model, 'kode_prov') ?>

    <?= $form->field($model, 'kode_kab') ?>

    <?= $form->field($model, 'kode_op') ?>

    <?= $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'realname') ?>

    <?php // echo $form->field($model, 'userlevel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
